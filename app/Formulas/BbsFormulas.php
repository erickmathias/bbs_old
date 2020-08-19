<?php


namespace App\Formulas;
use App\Models\Bbsformula;
use Illuminate\Support\Facades\Config;


class BbsFormulas
{
    protected $totalbars;
    protected $barsize;
    protected $shapecodeid;
    protected $length_a;
    protected $length_b;
    protected $length_c;
    protected $length_d;
    protected $length_e_r;
    protected $length_f;

    public function __construct($totalbars,$barsize,$shapecodeid,$length_a,$length_b,$length_c,$length_d,$length_e,$length_r,$length_f)
    {
        $this->totalbars = $totalbars;
        $this->barsize = $barsize;
        $this->shapecodeid = $shapecodeid;
        $this->length_a = $length_a;
        $this->length_b = $length_b;
        $this->length_c = $length_c;
        $this->length_d = $length_d;
        $this->length_e = $length_e;
        $this->length_r = $length_r;
        $this->length_f = $length_f;
    }

    function findtotalbarlength(){

        $CONSTANTS = Config::get('constants.bbs'); // load bbs constants

        $PI = $CONSTANTS['PI'];
        $CONST1 = $CONSTANTS['CONST1'];
        $CONST2 = $CONSTANTS['CONST2'];
        $CONST3 = $CONSTANTS['CONST3'];

        $totalbars = $this->totalbars;
        //dd($totalbars);
        $barsize = $this->formatbarsize($this->barsize);
        $shapecodeid = $this->shapecodeid;

        $a = $this->length_a;
        $b = $this->length_b;
        $c = $this->length_c;
        $d = $this->length_d;
        $e = $this->length_e;
        $r = $this->length_r;
        $f = $this->length_f;

        $n = null;
        $x = $this->getValueofX($shapecodeid,$barsize); //get the value of x

        //dd($shapecodeid);

        switch ($shapecodeid){
            case 1:
                $result = $a;
                break;
            case 2:
                $result = $a + $x;
                break;
            case 3:
                $result = $a + $x;
                break;
            case 4:
                $result = $a + $x;
                break;
            case 5:
                $result = $a + $x;
                break;
            case 6:
                $result = $a + $b + $x;
                break;
            case 7:
                $result = $a + $b + $c + $x;
                break;
            case 8:
                $result = $a + $b + $c + $x;
                break;
            case 9:
                $result = $a + $b + $c;
                break;
            case 10:
                $result = $a + $b + $c + $x;
                break;
            case 11:
                $result = $a + (2*$b) + $c + $e;
                break;
            case 12:
                $result = $a + $b + $c + $x;
                break;
            case 13:
                $result = $a + $b + $c;
                break;
            case 14:
                $result = $a + $b - ($CONST1*$r) + $x;
                break;
            case 15:
                $result = $a + $b + $c + $d + $x;
                break;
            case 16:
                $result = $a + $b + $c + $d + $x;
                break;
            case 17:
                $result = $a + $b + $c + $x;
                break;
            case 18:
                $result = $a + $b + $c + $d + $e + $x;
                break;
            case 19:
                $result = (2 * ($a + $b)) + $x;
                break;
            case 20:
                $result = $a + $b;
                break;
            case 21:
                $result = $a;
                break;
            case 22:
                $result = $a + $b + $x;
                break;
            case 23:
                $result = (2*$a) + $b + $c + $x;
                break;
            case 24:
                $result = (2*$a) + (3*$b) + $x;
                break;
            case 25:
                $result = (2*$a) + (3*$b) + $x;
                break;
            case 26:
                $result = $a + $b + ($CONST2*$c) + $d + $x;
                break;
            case 27:
                $result = $a + (2*$b) + $c + $d + $x;
                break;
            case 28:
                $result = $PI * (($c/$b) * ($a + $x));
                break;
            case 29:
                $result = $a + $b + $c + $d + $e;
                break;
            case 30:
                $result = $a;
                break;
            case 31:
                $result = $a + $x;
                break;
            case 32:
                $result = $a + $x;
                break;
            case 33:
                $result = $a + $x;
                break;
            case 34:
                $result = $a + $x;
                break;
            case 35:
                $result = $a + $b + $x;
                break;
            case 36:
                $result = $a + $b + $c + $x;
                break;
            case 37:
                $result = $a + $b + $c + $x;
                break;
            case 38:
                $result = $a + $b + $c;
                break;
            case 39:
                $result = $a + $b + $c + $n;
                break;
            case 40:
                $result = $a + (2*$b) + $c + $e;
                break;
            case 41:
                $result = $a + $b + $c + $x;
                break;
            case 42:
                $result = $a + $b + $c;
                break;
            case 43:
                $result = $a + $b - ($CONST1*$r) + $x;
                break;
            case 44:
                $result = $a + $b + $c + $d + $x;
                break;
            case 45:
                $result = $a + $b + $c + $d + $x;
                break;
            case 46:
                $result = $a + $b + $c + $x;
                break;
            case 47:
                $result = $a + $b + $c + $d + $e + $x;
                break;
            case 48:
                $result = (2 * ($a + $b)) + $x;
                break;
            case 49:
                $result = $a + $b;
                break;
            case 50:
                $result = $a;
                break;
            case 51:
                $result = $a + $b + $x;
                break;
            case 52:
                $result = (2*$a) + $b + $c + $x;
                break;
            case 53:
                $result = (2*$a) + (3*$b) + $x;
                break;
            case 54:
                $result = (2*$a) + (3*$b) + $x;
                break;
            case 55:
                    $result = $a + $b + ($CONST2*$c) + $d + $x;
                break;
            case 56:
                $result = $a + (2*$b) + $c + $d + $x;
                break;
            case 57:
                $result = $PI * (($c/$b) * ($a + $x));
                break;
            case 58:
                $result = $a + $b + $c + $d + $e;
                break;
            case 59:
                $result = $a;
                break;
            case 60:
                $result = $a;
                break;
            case 61:
                $result = $a + $x;
                break;
            case 62:
                $result = $a + $b - ($CONST3*$r) + $x;
                break;
            case 63:
                $result = $a + ($CONST2*$b) + $c + $x;
                break;
            case 64:
                $result = $a + $c + $x;
                break;
            case 65:
                $result = $a + $c;
                break;
            case 66:
                $result = $a + $b + $c + $x;
                break;
            case 67:
                $result = $a + $b + $c + $d + $x;
                break;
            case 68:
                $result = $a + $b + $c + $x;
                break;
            case 69:
                $result = $a + $b + $c;
                break;
            case 70:
                $result = $a + $b + $e;
                break;
            case 71:
                $result = $a + $b + $c;
                break;
            case 72:
                $result = $a + $b + $c + $x;
                break;
            case 73:
                $result = $a + $b + $c + $x;
                break;
            case 74:
                $result = $a + $b + $c + $x;
                break;
            case 75:
                $result = $a + $b + $c + $d + $x;
                break;
            case 76:
                $result = $a + $b + $c + $d + $x;
                break;
            case 77:
                $result = (2*$a) + (1.7*$b) + (2*$c) + $x;
                break;
            case 78:
                $result = $a + $b + $e + $x;
                break;
            case 79:
                $result = $a + $b + $e + $x;
                break;
            case 80:
                $result = $a + $b + $c + $d + $x;
                break;
            case 81:
                $result = $a + $b + $c + $d + $e + $x;
                break;
            case 82:
                $result = $a + $b + $c + $d + $e + $x;
                break;
            case 83:
                $result = $a + (2*$b) + $c + $e;
                break;
            case 84:
                $result = (2*$a) + $b + $c + $d + $x;
                break;
            case 85:
                $result = (2 * ($a + $b)) + $c + $d + $x;
                break;
            case 86:
                $result = $a + $b + $c + $d + (2*$e) + $x;
                break;
            case 87:
                $result = (2*$a) + (3*$b) + $c + $d + $x;
                break;
            case 88:
                $result = $a + $b + $c + (2*$d) + $e + $f + $x;
                break;
            case 89:
                $result = $a;
                break;
            case 90:
                $result = ($PI * ($a + $x)) + $b;
                break;
            case 91:
                $result = $PI * $c * ($a + $x);
                break;
            case 92:
                $result = $a + (2*$b) + $c + $d + $x;
                break;
            case 93:
                $result = $a + $b + $c + (2*$d) + $e;
                break;
            default:
                $result = null;
        }
        $answer = $result * $totalbars;
        return $answer;

    }

    function formatbarsize($barsize){
        //change the first letter to d
        return "d".substr($barsize,1);
    }

    function getValueofX($shapecodeid,$barsize){
        $x = Bbsformula::where('id',$shapecodeid)->pluck($barsize)->first();
        return $x;
    }
}
