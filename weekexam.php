<?php
/**
 * Created by PhpStorm.
 * User: 黑山老妖
 * Date: 2018/11/12
 * Time: 8:50
 */
header("Content-type:text/html;charset=utf-8");

class weekExam
{
    public function one()
    {
        $arr = array();
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                for ($k = 1; $k <= 4; $k++) {
                    if ($k != $i && $k != $j && $j != $i) {
                        $arr[] .= $i . $j . $k;
                    }
                }
            }
        }
        echo "一共能组成" . count($arr) . "个不重复的三位数";
        echo "<pre>";
        var_dump($arr);
    }

    public function twoUrl($url1, $url2)
    {
        $arr1 = explode("/", $url1);
        $arr2 = explode("/", $url2);
        $str = "";
        foreach ($arr1 as $key => $val) {
            if ($arr1[$key] == $arr2[$key]) {
                $str .= $arr1[$key] . "/";
            } else {
                return $str;
            }
        }
    }


    public function three($dir)
    {
        if (!is_dir($dir)) return "不是目录".false;
        $handle = opendir($dir);
        if ($handle) {
            while (($fl = readdir($handle)) !== false) {
                $temp = $dir . DIRECTORY_SEPARATOR . $fl;
                //如果不加  $fl!='.' && $fl != '..'  则会造成把$dir的父级目录也读取出来
                if (is_dir($temp) && $fl != '.' && $fl != '..') {
                    echo '目录：' . $temp . '<br>';
                    read_all($temp);
                } else {
                    if ($fl != '.' && $fl != '..') {

                        echo '文件：' . $temp . '<br>';
                    }
                }
            }
        }
    }
}


$a = new weekExam();
echo $a->twoUrl("/a/b/c/d/test.php", "/a/b/d/b/test.php");
echo "<br>";
$a->one();
echo $a->three($file);