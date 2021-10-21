<?php

namespace App\Http\Controllers;
use App\historialModel;
use Crabbly\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PDFSalud extends Controller
{
    public function pdf(){

        $historiales = historialModel::all();
        foreach($historiales as $historial){
        $pdf = app('Fpdf');
        //1. Añadir paginas al documento
        $pdf->AddPage('P' , 'A5');
        $pdf->SetFont('Arial', '',16);
        //3. Imprimir contenido en el pdf
        $pdf->SetXY(30, 05);
        $pdf->Cell(50,10, 'Historial del paciente');
        $pdf->SetXY(85, 05);
        $pdf->Cell(50,10, $historial->NombrePaciente);
        $pdf->SetXY(05, 25);
        $pdf->Cell(50,10,  'Nombre paciente:');
        $pdf->SetXY(50, 25);
        $pdf->Cell(50,10, $historial->NombrePaciente);
        $pdf->SetXY(05, 35);
        $pdf->Cell(50,10,  'Apellido paciente:');
        $pdf->SetXY(50, 35);
        $pdf->Cell(50,10, $historial->ApellidoPaciente);
        $pdf->SetXY(05, 45);
        $pdf->Cell(50,10,  'Telefono paciente: ');
        $pdf->SetXY(52, 45);
        $pdf->Cell(50,10, $historial->Telefono);
        $pdf->SetXY(05, 55);
        $pdf->Cell(50,10,  'Descripcion del historial: ');
        $pdf->SetXY(67, 55);
        $pdf->Cell(50,10, $historial->DescripcionHistorial);
        $pdf->SetXY(70, 170);
        $pdf->Cell(50,10,  'Firma:');
        $pdf->SetXY(90, 200);
        $pdf->Cell(15,5,"images/featureds/1634791980-WhatsApp Image 2021-10-20 at 8.49.17 PM.jpeg",1,0);
        // $pdf->Image('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAACeCAMAAAAmLh44AAABTVBMVEX///8AAAD29vjm5uYICAr7+/wODg4jIyXy8vLn5+ni4uS/v8Hs7O5KSk0TExW0tLdFRUhXV1qysrIAAAddXWFDQ0PFxchNTU2Ghol5eXynp6uLi5CYmJzU1NRQUFOenqIxMTUbGx1tbXAsLC8YGBw+PkNzc3R7e385OTnW1tZoaGisrLApKSlFRUsxMTF0dHQ2NDx2dH7b1d2elaImISpVU1xgYWiCgoAoKjhxb3o5O0mhnbEjHSIzJy9KPERtY2taXGm8xtCJhaGAgo2XjZzVztYbHCwJBxxbVnHc4/KMkI2jsb2ursEsKjwPDRdPTFmGg43JwdoSDidBPzhXXYZleKAdIDeOnbAmIC/X3f3K1OQUDjNJUGPt7v90boGMfnhqWlQ1KCR+eJ8vNlRMRGWno8BKXG9hZXo8Rm6torBlX4M8M1ohFB1BN01+eYzm93z1AAAOdUlEQVR4nO2d52PbxhXA8UCAAyQBkoAg7i1uTWvLTizLkhxHou1MN2nUJk3rpm38/3/sASTFIRB4D9yWf58k8Hg4PNy9dYMc95lPg70nm/sA8oay6IYsC/qBCiAcVA/DMkCRX3RzlgC9BJCtNs2/lUwCQF9wgxYOvwOQEAcuhHzwyAdQHGBnb+RaBDwLacuSsA6QHL0mciAsoi3LQcALluNEgdTc27Ik6AA5ayMjwyM1PgpAc8xH6UeqZpM2RjcoHM6zKcvCEYA4/lNhf34tWRouwNbgwvHcWrI0nACMeiVDHJ7OqyVLQxXgzLbA6c6cWrI0sF4Sty9xXJ5PS5aGHIBTEfmR2R3mlzh5ZH6oTnwbKZnYfPrsi+3QxDXNnjqAYzPrkJnsJoEvnwHA89MyQHn5hSICBB0LFR0Hly2BLBNI+eCc/bnXhuUfho7qlSEK2QnuoPsAhIte73gxyyA7k3x7eHJy8eTl5SSdcRM2nAvVJ0ig8CUmkcv+/3vOCt0VmWSWRfUAqgpX169etQ8ltzVVAGNkj9w/Bou1vcO6aGf6MpGSBSYPuZpjcuD3FC7EfXVxLDurBEsUhH5lyK/dVW+k6KAxcul0yjKpJwSA2lF95PLXV22b+G08Ei7/nHM7dJjj43sgc8i7q8yapgwQtewRN/DRTYUC5DDF8nk3lXNcCyDx4GIaTtzVZkGQ2bO1cUPk8va9iyqzEMUUC7hLKLFO4rXQc5vgWvkNE2oAFB4kjwc+P1bplVahgCrnwxUboQZwYHW9PR11EmNjJmErXR1UcsI0htOvXMhNN0kzA2zZ4uBUhs62DLW0U6FTcj8JYPxXg4iLF8u69RhvdVOd2LX3R5laddb653Tpq8j5iTp9HsMDY+2ZCG+otY22Z+uhebdkn/wu9zH+q0GWXHUSYH+ca/B2wslnKYyJRQzqUCTWrWGjDn7s/MY4qgC7Yz88bhNrG0LUAOc9MC0oUN/lJVK/MvNBNTobAOO1Xw7eEqsb5AiggvVN8+TsxvjZrREyVKPD/OxRL3uAkguXoUeQ+Wdob70KFWL1PmvXwaqkj1RxQADBpt0Z9/POYgtaeGevDnli/Ro6XG/SnE5ljJ/Ww+faX4tjPYcO5HwEIiV9X7dGqTg11ivpoJD1dZeMAGuU8nmSAI0b4BdjaSRxs4DMfmgIMqW6PkVbHfWQnI2Wt8ap5X0CpLp9TrKOu+smUgkXqt6TgTzxFl58jjhPmOhi/oDXvoSIDDlHSNM0iRm0EG+RBbQlSWN9GM70XVsORfLgR1c3+K0aMV3Woq4fShGESNBrTCRO2jjlxg4H7RxAayrUERp0nvK7h6BgT4D5p/avUwIXCjYHaoD4FZ1mKo0pTkhhJzmlhwsgx/Ec8TZ9dit+xtCgWWADP1lp1SDLYXV4yUFl9mEGxzFTUcRLeKBeqn/OWk3Vr0WCMsmhPdgCwjBkoIa+cxfJelmqPUVqKoJ53nhPHZe34YxloqqjPRHpc38KlOnLT9PI3Mo9AXTugTPWUyMLAsi8g3o1fCKSH8oZ3dSFSs5AmPgNgZB40pF+kqRi2p4gm+EG5Inf4IxkOlWOBcJ8vohU+GzMl5xLBcmvLwp54jcMyAOUol+xrskeYJK6PHlxhUb1MUzIwXATCLk4D84VrDtkS7psAtHv0sj9yiA6U/3KbaFCIt0uF91nm3Jngxx2RmGIONpQdgkBJbGfQ3WpIK7ODBCXOMWEddoXTHRiPsGY3yJ8Q0T5VzHApeC9RGUShC3aF0wkoK5p9pGMVAQTmcSRgzFKdEbrhCC1D2+bGbeiQjJSTUxkUkU63kFqyCK7SrIIVMsWp5gcnJVPIKvM4BNYHdYgRvuCSZ5q2RRa7i6PGDlRrJQLxATBNjmDZFCjrvLRaSJJIUrXAPleGkRlknNlcsLU+Jl535QRLSHsqw+1fJQzbPrD1Wz2N3ezmniXvH5AhjylOGIyXsAaMbJPv+ZieWWoTXZM8jSfsOg4MkXA9hJug2hV0y5ScYpK1eIsciB9o+noH/u9kEdWViT69BmZ7KyJhwDtAE2NF0GgvCqPowPLtBPWUyc72y6WzW0wkezRguE4euFNB5+TOQk6z+L0kKjJjBQ1VOTEdQD1XYwk+hwl/coZjpiDTcvhZ5pFlfY6mOajzkHo+wDwjfAtZcTpxLx3zml7W5qQb2hQ8zsKVcHuqgDX392KlFBAJ84qBpwmi6qE83Li1KwQX6B1E4/KRHL1/dekL0nYJZM9nDyTKEEkdXJmdJcWsewam5d++O5HkskJAHGjp1PMEKbE8AJ1zSEvU/pV6L0hkld/+Yl0j5DVJhE7nCKTEsj4gatRM6PcE4o2+YqNGoCzG2JSwUtMTir2MQPvpcxMJ+nzoE8JY+0C1J9h/6efiEkk2XF9zDC6vb/O/HlC12aajJoW8qCXpnLcLbRV+KtoNZBFzu+p67pkJS0fcb2BaK8rJJJI2DAj701ModW31IZv2vDifETql7lo2FeAe2prCWXIPypTw6KCrX5F5ud7fCCH7pQdFF64Bnjxy8CVQGpDNsTgyzfizaDE82JIj203Svu3d3sDXyPOmiZsHZk9mlG/NM0wMRWIHuo5Y//wj+f3/0sak0dBe61Y9HO/8vHN7UvDADIjTAwvm7YjQyJasDaciwnilggJbxGeD5zTwmsAgvWW0R7i2aaaZt4rIiYSL5/c2z77zE/T4gg7Rqj+t7//avVBFo5P8bFzlzQ6jAq2r3oikVhQrGHcoAOMSHhlZyC+3bDzr+IW+zf43NaWuQfeQi+ySBXo278rWO8kcNVbxRCKgIoLXZqIwLWusCdK3Cvlw3HT5Xo6Fz8b8edFJRn2CcZzHyijYa+YqbA3B9lLjkwJmd3f++2sqzbjUH6Lc6sRE1GhauE+NuSZQfv43spKxMKlrlHrPqHI68lUxLjAnvv4pnMtlNEzul5JFbM7baFjCN0dWCbjZPLut3edPy7b8NypsMh7DKFlR6O0B5LkWZGtTpm9m7s375Wzf9yMVBVoJsyRAervLKrYqR41Gi3T1oHQ0oyvKsajHzyFnR3TIRBA3to4jFZTxyxQdblhCRUxijdnX3X+uoBrp84YXH/6qxdixorMQSHoifyIxdCLTI0YXZ7XU6e/v3r3Hv55+6/+xyElvil0u0f75+vrzl+F1lqjkm7WB6pWcqlUKq0nPQOO014bfgY3W+ENZJRMehb4FML23Sqj5Y2W7ygBYXAVVV0zrh4OPIh4VAbD0/BnlMSHf7/4MXB+InxQL8zPQhnlyKxGiKaDPOdPKsGMp0w5XrgKVz+oV784F7TER0nwl/aP7D5O1sxOXlREIxDO9y5f7hraINtX/37lyMsMUoYzn7ukGS1o5JtN9eCXYKrxrXmSylYlOeTMfkvJDWzC6R2UXJ8cukZICNrb7Yrp0Vb1TsmeR63ssv4vRLo3CSnB9BrTD95G550rSclsefrZF38cCB094Q3H9QcrNaOkJQ9MlcCXrg4b6T4JOiPIlyNjP9MPWTNaPbN+2LElIWWTXY2UYFMKiJnY2X/++wP7f617WkpKq5gKwK8ndzq6wtfI1a2fJEuLbZMFzeWmNpMgPmYNjulSnmTRGAP9c7SZfbzhmg3jtRuuLl/rPPLd3U1woAOsmVaiRzs9RhwGYWMd8BxpozOP2sN3JWaCKY09mDywV4tnstjfMFXCvUcasrpHIhLPV+Jppc4UjO0jR8jzjROSQs+PFYeGGR+41J8Ua0wAzE04gSfsklgP6DGmDOG6pcWpi7fHE563SAwPBamNQsaQMGEx2+7bL/8nPJNbabPvSIa9YS7TwR/PmMHJTfVgPM3dtr2JqKCn+i8FUE9Su89f3X24/ZOp1EY/WvOnqrVILa0IxLk+Z+Y+cExkbGgculE7+vD245uXVvr2yYBXMiU2FtBLDJw3SPj111HmeB2/tMy3duGPrZMbk7DjMoybHIDaGBUgemKvK1HDk1p/a3sWsjn5OfUf99hfyMDpwJ56Qx/qAkwWWqsbdjWaiPwRc13Hu3Qu8S1QJCxIMzJSvlrlKJ3TspudbIUvmk4GJaSzFCFtKsCxWJEYBBOllulXlluRkQDMERYFF6Z+Mm0Jsz9paUmjMtFEZFe7ZpYEMe9ml6lTpUDf37w8sE6Sn/q44ZFnni0lYph+qgEC2dUOvOVAkZ1OGXFFYYV1SZa61gaHsLq9RHc+d8UV04+a5oY2m07CBs70Dft8kGQQJvwtAmsKK2txtmkrY/B4V1WXzCIG7lBbUZGEagC2k1/uya+oSJrMLsxoaqFFXT6zHEh56ipxPD5XJwMsnARMMBHrQGQlkwNBgXqwH4HsSopkfSbxXpeNhWfVXJADyLqfrHciOv107szJ+FysIMSjraB61agbcKjVL2ZqawJSANrshs0qqlfd+kdapkd01QZOoDRLa2OQRW+vXxISs5inGKK4YrpEkUGeSZakT5a+NW2RSJhjRydEc3O45OLQZhft3VOc5a84Tp2Udw550fDyG+H+wkZFgLWZ2l+TxAoMnF4WIFkGeXoLF8dSWR2Lk5ZnMCluQWP5B06XtDAfiXCR2cyYTc5oFJMDKM/YIemyvPmSIZmIcYDsHPSIweGSumrikGWpG/uu5rXWPwz5Od2JRmZQbejrLLCZvfXtElnSSYvmwEye8au7M5rGsqK4pInGu3e9v4KbALU5qRGTGmzP8W5YtvU3vWXR6QIIcTcHx7qmNPswygUZ8Hb6RUzzgm8u3kif8vRXF0+DE2M3Mh9bN37LfOprFh2Y1YqECTlUz2Pbqtrf1Dg//K7OvJ4DSS/IvsRcdUgXD3pX2aNBX51AeF7EVnm9+GyIg5sjrz9poi5+IuwTR3Z1fP6njOglHND4OAh+1q6jxGc+dbZybE17c/rKIwkbn33XYVz+mvQnjKe2uju2ZsTNnw47+h8d9ZvPEhmGD62Ol/Z//hbuI02dNNEAAAAASUVORK5CYII=',90,150,50,50,'PNG');
       

        }
        return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']); //->Es para convertir de html a pdf
    }
}
