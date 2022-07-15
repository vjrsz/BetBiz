<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DashboardAdmin\TicketRequest;
use App\Models\Ticket;
use App\Models\Match;

class TicketController extends Controller
{
	public function store(TicketRequest $request)
    {	
    	/* Convert for date */
    	$request->initial_date = str_replace('/', '-', $request->initial_date);
    	$initial_date = substr($request->initial_date, 6).'-'.substr($request->initial_date, 3, -5).'-'.substr($request->initial_date, 0, -8);
    	$request->final_date = str_replace('/', '-', $request->final_date);
    	$final_date = substr($request->final_date, 6).'-'.substr($request->final_date, 3, -5).'-'.substr($request->final_date, 0, -8);
    	$initial_time = $request->initial_time.':00';
    	$final_time = $request->final_time.':00';


    	$ticket = Ticket::create(array(
    		'cms' => intval(str_replace('%', '', $request->cms)),
    		"initial_date" => $initial_date,
            "final_date" => $final_date,
            "initial_time" => $initial_time,
            "final_time" => $final_time,
            "price" => $request->price,
            "status" => $request->status,
    	));

        for ($i=1; $i <= intval($request->num_match); $i++) { 
        	$match = Match::create(array(
        		'ticket_id' => $ticket->id,
        		'team_one' => $request->input("team_one_".$i),
        		'team_two' => $request->input("team_two_".$i),
        	));
        }
        return redirect()->back()->withSuccess('Cadastrado com sucesso!');
    }
    public function destroy($ticket_id){
        $matches = Match::where('ticket_id', $ticket_id)->get();
        foreach ($matches as $match) {
            $match->delete();
        }
        Ticket::find($ticket_id)->delete();
        return redirect()->back()->withSuccess('Deletado com sucesso!');
    }
    public function search(Request $request){
        $tickets = Ticket::where('id', $request->ticket_id)->get();
        $matches = Match::where('ticket_id', $request->ticket_id)->get();
        
        return view('DashboardAdmin.registerTicket', [
            'tickets' => $tickets,
            'matches' => $matches
        ]);
    }
    
}