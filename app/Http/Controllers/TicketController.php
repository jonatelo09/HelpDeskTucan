<?php

namespace App\Http\Controllers;
use App\Category;
use App\Client;
use App\Priority;
use App\Problem;
use App\Status;
use App\Ticket;
use App\Turn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	public function index() {
		$tickets = DB::table('tickets')
			->join('turns as c', 'tickets.turn_id', '=', 'c.id')
			->join('categories as cat', 'tickets.category_id', '=', 'cat.id')
			->join('clients as cl', 'tickets.client_id', '=', 'cl.id')
			->join('problems as pr', 'tickets.problem_id', '=', 'pr.id')
			->join('priorities as pt', 'tickets.priority_id', '=', 'pt.id')
			->join('statuses as st', 'tickets.status_id', '=', 'st.id')
			->join('users as us', 'tickets.user_id', '=', 'us.id')
			->select('tickets.folio', 'c.name_tur', 'cat.name_cat', 'cl.name_cli', 'pr.name_pro', 'pt.name_pri', 'st.name_sta', 'us.email')
			->paginate(10);
		return view('tickets.index')->with(compact('tickets'));
	}

	public function create() {
		$folio = date('d-m-y');
		$turnos = Turn::orderBy('name_tur')->get();
		$problems = Problem::orderBy('name_pro')->get();
		$status = Status::orderBy('name_sta')->get();
		$priorities = Priority::orderBy('name_pri')->get();
		$clients = Client::orderBy('name_cli')->get();
		$categories = Category::orderBy('name_cat')->get();
		return view('tickets.create')->with(compact('turnos', 'clients', 'categories', 'problems', 'status', 'priorities'));
	}

	public function store(Request $request) {
		$messages = [
			'category_id.required' => 'Es necesario elegir una Categoria',
			'problem_id.required' => 'Es necesario elegir un Problema',
			'priority_id.required' => 'Es necesario elegir una Prioridad',
			'status_id.required' => 'Es necesario elegir un Status',
			'turn_id.required' => 'Es necesario elegir un Turno',
			'client_id.required' => 'Es necesario elegir un Departamento',
		];
		$rules = [
			'category_id' => 'required',
			'problem_id' => 'required',
			'priority_id' => 'required',
			'status_id' => 'required',
			'turn_id' => 'required',
			'client_id' => 'required',
		];
		$this->validate($request, $rules, $messages);
		$tickets = new Ticket();
		$tickets->folio = $request->input('folio');
		$tickets->category_id = $request->category_id;
		$tickets->problem_id = $request->problem_id;
		$tickets->priority_id = $request->priority_id;
		$tickets->status_id = $request->status_id;
		$tickets->turn_id = $request->turn_id;
		$tickets->client_id = $request->client_id;
		$tickets->user_id = $request->user_id;
		$tickets->save();

		return redirect('/tickets');
	}

	public function edit($id) {
		//
	}
	public function update($id) {
		//
	}
	public function destroy($id) {
		//
	}
}
