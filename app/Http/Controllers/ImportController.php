<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Excel;
use App\DataMart;
use Illuminate\Support\Facades\Session;
class ImportController extends Controller
{
    public function index(){
        return view('import.index');
    }

    public function store(Request $request) { 

        
        if ($request->hasFile('file')) { 
            $path = $request->file('file')->getRealPath();
            $data=Excel::selectSheets('Table Actemra')->load($path, function($reader) {
              $columns=['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21'];    
              $data=$reader->get($columns)->toArray();  
              
              $newData=[];
              $i=0;
              foreach($data[0] as $rows => $row_cells){
                    //skip null key rows
                    if($row_cells[1]==null) continue;
                    //skip header row
                    if($row_cells[1]=='SubjNum') continue;
                    //Save data in mart
                    $r=new DataMart();
                    $r->subjNum=$row_cells[1];
                    $r->city=$row_cells[2];
                    $r->doctor=$row_cells[3];
                    $r->product=$row_cells[4];
                    $r->specialty=$row_cells[5];
                    $r->sep_territory=$row_cells[6];
                    $r->disease=$row_cells[7];
                    $r->q1_product_dc_lw=$row_cells[8];
                    $r->q4_1_main_point_of_m_1pt=$row_cells[9];
                    $r->q4_1_main_point_of_m_2pt=$row_cells[10];
                    $r->q4_1_main_point_of_m_3pt=$row_cells[11];
                    $r->q4_1_main_point_of_m_4pt=$row_cells[12];
                    $r->q5_1_msg_relevancy=$row_cells[13];
                    $r->q6_1_msg_credibility=$row_cells[14];
                    $r->q7_1_msg_motivation=$row_cells[15];
                    $r->q8_1_material_used_1st=$row_cells[16];
                    $r->q8_1_material_used_2st=$row_cells[17];
                    $r->q8_1_material_used_3st=$row_cells[18];
                    $r->q9_1_lengh_of_disc=$row_cells[19];
                    $r->q10_1_frequency_prom_prod=$row_cells[20];
                    $r->q11_1_prescribing_change=$row_cells[21];
                    if($r->save()){
                        $i+=1;
                    }
              }
              
              //$data->earch();
              $message= "$i rows have been imported";
              Session::flash('success',"$message");
              $newData=[];
            });

        }
        return back();
    }
}
