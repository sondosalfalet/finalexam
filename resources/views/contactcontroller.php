
<?php
namespace App\Http\contact;
use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function index ()
    {
        $contacts = contact::all();
        return view('index',compact('contacts'));
    }
    public function contant()
    {
        return view('contact');

    }
    public function store(Request $request)
    {
        $contact = new contact;
        $contact->fname = $request->first->firstName;
        $contact->lname = $request->lastName;
        $contact->email = $request->email;

        $contact->save();
        return redirect()->back();

    }
    public function store(Request$request)
    {
        $data=$request->validate[]
        first
}
