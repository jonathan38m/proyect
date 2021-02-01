<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $campos = array( 
            "q1",
            "q2",
            "q3",
            "q4",
            "q5",
            "q6",
            "q7",
            "q8",
            "q9",
            "q10",
            "q11",
            "q12",
            "q13",
            "q14",
            "q15",
            "q16",
            "q17",
            "q18",
            "q19",
            "q20",
            "q21",
            "q22",
            "q23",
            "q24",
            "q25",
            "q26",
            "q27",
            "q28",
            "q29",
            "q31",
            "q32",
            "q33",
            "q34",
            "q35",
            "q36",
            "q37",
            "q38",
            "q39",
            "q40",
            "q41",
            "q42",
            "q43",
            "q44",
            "q45",
            "q46",
            "q47",
            "q48",
            "q49",
            "q50");
        
        foreach ($campos as $value) {
            if(empty($request[$value]) || is_null($request[$value]) || $request[$value] == "")
            {
                $request[$value]="4";
            } 
        }
        $this->request = $request;
        $this->total = 0;
        $this->qualify($request);
    }

    private function qualify(Request $request)
    {
        
        if($request->q1==3)
            $this->total++;

        if($request->q2==1)
            $this->total++;

        if($request->q3==2)
            $this->total++;

        if($request->q4==3)
            $this->total++;

        if($request->q5==2)
            $this->total++;

        if($request->q6==2)
            $this->total++;

        if($request->q7==2)
            $this->total++;

        if($request->q8==3)
            $this->total++;

        if($request->q9==2)
            $this->total++;

        if($request->q10==2)
            $this->total++;

        if($request->q11==3)
            $this->total++;

        if($request->q12==3)
            $this->total++;

        if($request->q13==1)
            $this->total++;

        if($request->q14==2)
            $this->total++;

        if($request->q15==3)
            $this->total++;

        if($request->q16==3)
            $this->total++;

        if($request->q17==3)
            $this->total++;

        if($request->q18==2)
            $this->total++;

        if($request->q19==3)
            $this->total++;

        if($request->q20==1)
            $this->total++;

        if($request->q21==3)
            $this->total++;

        if($request->q22==2)
            $this->total++;

        if($request->q23==3)
            $this->total++;

        if($request->q24==3)
            $this->total++;

        if($request->q25==2)
            $this->total++;

        if($request->q26==1)
            $this->total++;

        if($request->q27==3)
            $this->total++;

        if($request->q28==3)
            $this->total++;

        if($request->q29==3)
            $this->total++;

        if($request->q30==1)
            $this->total++;

        if($request->q31==2)
            $this->total++;

        if($request->q32==3)
            $this->total++;

        if($request->q33==1)
            $this->total++;

        if($request->q34==3)
            $this->total++;

        if($request->q35==2)
            $this->total++;

        if($request->q36==3)
            $this->total++;

        if($request->q37==3)
            $this->total++;

        if($request->q38==1)
            $this->total++;

        if($request->q39==2)
            $this->total++;

        if($request->q40==1)
            $this->total++;

        if($request->q41==2)
            $this->total++;

        if($request->q42==3)
            $this->total++;

        if($request->q43==1)
            $this->total++;

        if($request->q44==2)
            $this->total++;

        if($request->q45==2)
            $this->total++;

        if($request->q46==3)
            $this->total++;

        if($request->q47==3)
            $this->total++;

        if($request->q48==3)
            $this->total++;

        if($request->q49==2)
            $this->total++;

        if($request->q50==2)
            $this->total++;

        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->request->email)->markdown('emails.admin.test');
    }
}
