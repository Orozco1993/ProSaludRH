<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TestApplication;
use App\Models\Response;
use Auth;
use Session;


class TestApplicationsController extends Controller
{
    public function getTest(TestApplication $testApplication)
    {
    	$data=[];
    	$data['test'] = $testApplication->test;
    	$data['testApplication'] = $testApplication;
    	$data['questions_test1'] = [
    		"q1" => "1.    Mi trabajo me exige hacer mucho esfuerzo físico",
	    	"q2" => "2.  Me preocupa sufrir un accidente en mi trabajo ",
	    	"q3" => "3.	Considero que las actividades que realizo son peligrosas",
	    	"q4" => "4.	Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno",
	    	"q5" => "5.	Por la cantidad de trabajo que tengo debo trabajar sin parar",
	    	"q6" => "6.	Considero que es necesario mantener un ritmo de trabajo acelerado",
	    	"q7" => "7.	Mi trabajo exige que esté muy concentrado",
	    	"q8" => "8.	Mi trabajo requiere que memorice mucha información",
	    	"q9" => "9.	Mi trabajo exige que atienda varios asuntos al mismo tiempo",
	    	"q10" => "10.	En mi trabajo soy responsable de cosas de mucho valor",
	    	"q11" => "11.	Respondo ante mi jefe por los resultados de toda mi área de trabajo",
	    	"q12" => "12.	En mi trabajo me dan órdenes contradictorias",
	    	"q13" => "13.	Considero que en mi trabajo me piden hacer cosas innecesarias",
	    	"q14" => "14.	Trabajo horas extras más de tres veces a la semana",
	    	"q15" => "15.	Mi trabajo me exige laborar en días de descanso o festivos ",
	    	"q16" => "16.	Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales",
	    	"q17" => "17.	Pienso en las actividades familiares o personales cuando estoy en mi trabajo",
	    	"q18" => "18.	Mi trabajo permite que desarrolle nuevas habilidades",
	    	"q19" => "19.	En mi trabajo puedo aspirar a un mejor puesto",
	    	"q20" => "20.	Durante mi jornada de trabajo puedo tomar pausas cuando las necesito",
	    	"q21" => "21.	Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo",
	    	"q22" => "22.	Puedo cambiar el orden de las actividades que realizo en mi trabajo",
	    	"q23" => "23.	Me informan con claridad cuáles son mis funciones",
	    	"q24" => "24.	Me explican claramente los resultados que debo obtener en mi trabajo",
	    	"q25" => "25.	Me informan con quién puedo resolver problemas o asuntos de trabajo",
	    	"q26" => "26.	Me permiten asistir a capacitaciones relacionadas con mi trabajo",
	    	"q27" => "27.	Recibo capacitación útil para hacer mi trabajo",
	    	"q28" => "28.	Mi jefe tiene en cuenta mis puntos de vista y opiniones",
	    	"q29" => "29.	Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo",
	    	"q30" => "30.	Puedo confiar en mis compañeros de trabajo",
	    	"q31" => "31.	Cuando tenemos que realizar trabajo de equipo los compañeros colaboran",
	    	"q32" => "32.	Mis compañeros de trabajo me ayudan cuando tengo dificultades",
	    	"q33" => "33.	En mi trabajo puedo expresarme libremente sin interrupciones",
	    	"q34" => "34.	Recibo criticas constantes a mi persona y/o trabajo",
	    	"q35" => "35.	Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones",
	    	"q36" => "36.	Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones",
	    	"q37" => "37.	Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador",
	    	"q38" => "38.	Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores",
	    	"q39" => "39.	Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo",
	    	"q40" => "40.	He presenciado actos de violencia en mi centro de trabajo ",
	    	"q41" => "41.	Atiendo clientes o usuarios muy enojados",
	    	"q42" => "42.	Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas",
	    	"q43" => "43.	Para hacer mi trabajo debo demostrar sentimientos distintos a los mios",
	    	"q44" => "44.	Comunican tarde los asuntos de trabajo",
	    	"q45" => "45.	Dificultan el logro de los resultados del trabajo",
	    	"q46" => "46.	Ignoran las sugerencias para mejorar su trabajo",

		];
    	return view('tests.test1', $data);
    }
    public function postTest(TestApplication $testApplication, Request $request)
    {
          

    	$this->validate($request, [
            'q1' => 'required|between:1,5',
            'q2' => 'required|between:1,5',
            'q3' => 'required|between:1,5',
            'q4' => 'required|between:1,5',
            'q5' => 'required|between:1,5',
            'q6' => 'required|between:1,5',
            'q7' => 'required|between:1,5',
            'q8' => 'required|between:1,5',
            'q9' => 'required|between:1,5',
            'q10' => 'required|between:1,5',
            'q11' => 'required|between:1,5',
            'q12' => 'required|between:1,5',
            'q13' => 'required|between:1,5',
            'q14' => 'required|between:1,5',
            'q15' => 'required|between:1,5',
            'q16' => 'required|between:1,5',
            'q17' => 'required|between:1,5',
            'q18' => 'required|between:1,5',
            'q19' => 'required|between:1,5',
            'q20' => 'required|between:1,5',
            'q21' => 'required|between:1,5',
            'q22' => 'required|between:1,5',
            'q23' => 'required|between:1,5',
            'q24' => 'required|between:1,5',
            'q25' => 'required|between:1,5',
            'q26' => 'required|between:1,5',
            'q27' => 'required|between:1,5',
            'q28' => 'required|between:1,5',
            'q29' => 'required|between:1,5',
            'q30' => 'required|between:1,5',
            'q31' => 'required|between:1,5',
            'q32' => 'required|between:1,5',
            'q33' => 'required|between:1,5',
            'q34' => 'required|between:1,5',
            'q35' => 'required|between:1,5',
            'q36' => 'required|between:1,5',
            'q37' => 'required|between:1,5',
            'q38' => 'required|between:1,5',
            'q39' => 'required|between:1,5',
            'q40' => 'required|between:1,5',
            'q41' => 'required|between:1,5',
            'q42' => 'required|between:1,5',
            'q43' => 'required|between:1,5',
            'q44' => 'required|between:1,5',
            'q45' => 'required|between:1,5',
            'q46' => 'required|between:1,5',
        ]);
    	try{
         Response::create([
                'question_number' => 1,
                'question' => '1.    Mi trabajo me exige hacer mucho esfuerzo físico',
                'answer' => $request->get('q1'),
                'test_application_id' => $testApplication->id,
                'user_id' => Auth::user()->id,
            ]);
          Response::create([
                'question_number' => 2,
                'question' => '2.  Me preocupa sufrir un accidente en mi trabajo ',
                'answer' => $request->get('q2'),
                'test_application_id' => $testApplication->id,
                'user_id' => Auth::user()->id,
            ]);

      }	catch (\Exception $e) {
            return back()->withErrors(['Something went wrong creating the test application. Please try again.']);
        }

         Session::flash('flash_message', 'Test application successfully created!');

         return redirect('/dashboard');
    }

}
