<?php

//Write your custome class/methods here
namespace Apps;

use \Apps\Model;
use \UPFiles\UploadFiles;
use \Apps\PaystackBanking;
use \Verot\Upload;
use \Apps\Mailer;
use \Apps\EmailTemplate;
use \Apps\PHPMailer;
use stdClass;

use \Apps\Session;

class Core extends Model
{

	public $token = NULL;
	public $ngn = "&#x20A6;";

	public function __construct()
	{
		parent::__construct();
	}

	public function GenPassword($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function GenOTP($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return strtoupper($randomString);
	}


	public static function slugify($string)
	{
		$table = array(
			'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z', 'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c',
			'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
			'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
			'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
			'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
			'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
			'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
			'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r', '/' => '-', ',' => '', ' ' => '-', '&' => 'and'
		);
		// -- Remove duplicated spaces
		$stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/', '/[^a-z0-9]/i'), ' ', $string);
		// -- Returns the slug
		return strtolower(strtr($string, $table));
	}

	public function ToMoney($amount)
	{
		$amount = number_format($amount, 2, ".", ",");
		return "&#x20A6;" . $amount;
	}

	public function Pages()
	{
		$Pages = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE type='page' OR type='store' OR type='newspage' AND homepage='0' ORDER BY sort ASC");
		return $Pages;
	}

	public function CatPages($cat){
		$CatPages = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE category  LIKE '%$cat%' AND  homepage='0' ORDER BY sort ASC");
		return $CatPages;
	}



	public function AdminListPages()
	{
		$AdminListPages = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE homepage='0' ");
		return $AdminListPages;
	}

	public function AddView($page)
	{
		$AddView = mysqli_query($this->dbCon, "UPDATE hilc_pages SET `views` = (`views` + 1) WHERE id='$page'");
		return $this->countAffected();
	}

	public function Articles()
	{
		$Articles = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE type='blog'");
		return $Articles;
	}

	public function Blogs($limit = 0)
	{
		if ($limit) {
			$Blogs = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE type='blog' ORDER BY RAND() LIMIT $limit");
		} else {
			$Blogs = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE type='blog'");
		}
		return $Blogs;
	}

	public function LoadParentMenus()
	{
		$LoadParentMenus = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE parent = 0 AND type='page' AND homepage='0' ");
		return $LoadParentMenus;
	}

	public  function GetNextSort($type = "page")
	{
		$GetNextSort = mysqli_query($this->dbCon, "SELECT count(id) AS cnt FROM hilc_pages WHERE type='$type'");
		$GetNextSort = mysqli_fetch_object($GetNextSort);
		return $GetNextSort->cnt + 1;
	}

	public  function HasPages($page)
	{
		$HasPages = mysqli_query($this->dbCon, "SELECT count(id) AS cnt FROM hilc_pages WHERE parent='$page'");
		$HasPages = mysqli_fetch_object($HasPages);
		return $HasPages->cnt;
	}

	public  function SubPages($parent)
	{
		$SubPages = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE parent='$parent' ORDER BY sort ASC");
		return $SubPages;
	}

	public  function setBG($url)
	{
		$htm = "";
		$htm .= "style=\"background: url({$url}) no-repeat center center / cover;\"";
		return $htm;
	}

	public function Sliders()
	{
		$Sliders = mysqli_query($this->dbCon, "SELECT * FROM hilc_slides");
		return $Sliders;
	}
	public function Products()
	{
		$Products = mysqli_query($this->dbCon, "SELECT * FROM hilc_products");
		return $Products;
	}
	public  function ProductInfo($product)
	{
		$ProductInfo = mysqli_query($this->dbCon, "SELECT * FROM hilc_products WHERE id='$product'");
		$ProductInfo = mysqli_fetch_object($ProductInfo);
		return $ProductInfo;
	}

	public  function setProductInfo($product, $name, $value)
	{
		mysqli_query($this->dbCon, "UPDATE hilc_products SET `$name`='$value' WHERE id='$product'");
		return $this->countAffected();
	}

	public  function SliderInfo($slide)
	{
		$SliderInfo = mysqli_query($this->dbCon, "SELECT * FROM hilc_slides WHERE id='$slide'");
		$SliderInfo = mysqli_fetch_object($SliderInfo);
		return $SliderInfo;
	}

	public  function setSliderInfo($slide, $name, $value)
	{
		mysqli_query($this->dbCon, "UPDATE hilc_slides SET `$name`='$value' WHERE id='$slide'");
		return $this->countAffected();
	}

	public  function setWebPartInfo($webpartid, $name, $value)
	{
		mysqli_query($this->dbCon, "UPDATE hilc_webparts SET `$name`='$value' WHERE id='$webpartid'");
		return $this->countAffected();
	}

	public function Testimonies()
	{
		$Testimonies = mysqli_query($this->dbCon, "SELECT * FROM hilc_testimonies");
		return $Testimonies;
	}

	public function PageWebParts($pageid)
	{
		$PageWebParts = mysqli_query($this->dbCon, "SELECT * FROM hilc_webparts WHERE page='$pageid' ORDER BY sort ASC");
		return $PageWebParts;
	}

	public  function TestimonyInfo($testimony)
	{
		$TestimonyInfo = mysqli_query($this->dbCon, "SELECT * FROM hilc_testimonies WHERE id='$testimony'");
		$TestimonyInfo = mysqli_fetch_object($TestimonyInfo);
		return $TestimonyInfo;
	}

	public  function setTestimonyInfo($testimony, $name, $value)
	{
		mysqli_query($this->dbCon, "UPDATE hilc_testimonies SET `$name`='$value' WHERE id='$testimony'");
		return $this->countAffected();
	}

	public  function SiteInfos()
	{
		$SiteInfos = mysqli_query($this->dbCon, "SELECT * FROM hilc_siteinfo");
		return $SiteInfos;
	}

	public  function getSiteInfo($name)
	{
		$getSiteInfo = mysqli_query($this->dbCon, "SELECT `value` FROM hilc_siteinfo WHERE name='$name'");
		$getSiteInfo = mysqli_fetch_object($getSiteInfo);
		return $getSiteInfo->value;
	}

	public  function setSiteInfo($name, $value)
	{
		mysqli_query($this->dbCon, "UPDATE hilc_siteinfo SET value='$value' WHERE name='$name'");
		return $this->countAffected();
	}

	public  function PageInfo($slug)
	{
		$PageInfo = mysqli_query($this->dbCon, "SELECT * FROM hilc_pages WHERE slug='$slug' OR id='$slug'");
		$PageInfo = mysqli_fetch_object($PageInfo);
		return $PageInfo;
	}


	public  function setPageInfo($page, $name, $value)
	{
		mysqli_query($this->dbCon, "UPDATE hilc_pages SET `$name`='$value' WHERE id='$page'");
		return $this->countAffected();
	}

	public function CMS($id, $cms)
	{
		$CMS = mysqli_query($this->dbCon, "SELECT count(id) AS cnt FROM hilc_cms WHERE id='$id'");
		$CMS = mysqli_fetch_object($CMS);
		if ($CMS->cnt) {
			mysqli_query($this->dbCon, "UPDATE hilc_cms SET cms='$cms' WHERE id='$id'");
			if ($this->countAffected()) {
				return "updated";
			}
			return "failed";
		} else {
			mysqli_query($this->dbCon, "INSERT INTO sa_cms(id,cms) VALUES('$id','$cms')");
			if ($this->getLastId()) {
				return "created";
			}
			return "failed";
		}
	}



	public function CMSkey($cmskey, $cms)
	{
		$CMS = mysqli_query($this->dbCon, "SELECT count(id) AS cnt FROM hilc_cms WHERE cmskey='$cmskey'");
		$CMS = mysqli_fetch_object($CMS);
		if ($CMS->cnt) {
			mysqli_query($this->dbCon, "UPDATE hilc_cms SET cms='$cms' WHERE cmskey='$cmskey'");
			if ($this->countAffected()) {
				return "updated";
			}
			return "failed";
		} else {
			mysqli_query($this->dbCon, "INSERT INTO hilc_cms(cmskey,cms) VALUES('$cmskey','$cms')");
			if ($this->getLastId()) {
				return "created";
			}
			return "failed";
		}
	}

	function clean($string)
	{
		$string = str_replace('%20', ' ', $string);
		return $string;
	}

	public  function getCMS($page, $part, $id, $deftext = "Please add text")
	{
		$cmskey = "{$page}-{$part}-{$id}";
		$cmsinfo = mysqli_query($this->dbCon, "SELECT `cms` FROM hilc_cms WHERE cmskey='$cmskey'");
		$cmsinfo = mysqli_fetch_object($cmsinfo);
		if ($cmsinfo) {
			$sl = (int) strlen($cmsinfo->cms);
			if ($sl) {
				return $cmsinfo->cms;
			} else {
				return $deftext;
			}
		} else {
			return $deftext;
		}
	}
	public  function cmsinfo($id, $deftext = "Please add text")
	{
		$cmsinfo = mysqli_query($this->dbCon, "SELECT `cms` FROM hilc_cms WHERE  id='$id'");
		$cmsinfo = mysqli_fetch_object($cmsinfo);
		if ($cmsinfo) {
			$sl = (int) strlen($cmsinfo->cms);
			if ($sl) {
				return $cmsinfo->cms;
			} else {
				return $deftext;
			}
		} else {
			return $deftext;
		}
	}

	public  function get_cms($cmskey, $deftext = "Please add text")
	{
		$cmsinfo = mysqli_query($this->dbCon, "SELECT `cms` FROM hilc_cms WHERE  cmskey='$cmskey'");
		$cmsinfo = mysqli_fetch_object($cmsinfo);
		if ($cmsinfo) {
			$sl = (int) strlen($cmsinfo->cms);
			if ($sl) {
				return $cmsinfo->cms;
			} else {
				return $deftext;
			}
		} else {
			return $deftext;
		}
	}









	// Admin//

}
