<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCompanyRequest;
use App\Models\Company;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;


// Bu resurs ya'ni model bilan bog'lana oluvchi Controller bo'lib, uni php artisan make:controller controllerNameController --resource komandasi yordamida yaratiladi, bu controller yordamida bazaga ma'lumot yozish, o'qish, o'zgartirish yoki o'chirish mumkin
class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $companies = Company::all();
        $companies = Company::orderByDesc('created_at')->paginate(20);

        return view('companies.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = new Company;
        return view('companies.create', [
            'company' => $company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCompanyRequest $request) // store metodi saqlanayotgan ma'lumotni validatsiya qilish
    {
        // dd($request->all()); // Form dan kelgan ma'lumotni ko'rish
        

        // $company = new Company; //Company modelidan instance yaratib olindi
        // $company->name = $data['name'];
        // $company->address = $data['address'];
        // $company->phone = $data['phone'];
        // $company->save(); // Bazaga ma'lumot saqlashning birinchi usuli


        Company::create($request->validated());  //Bu bazaga ma'lumot saqlashning ikkinchi usuli

        // dd($company);
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCompanyRequest $request, Company $company)
    {
        // var_dump($company); die;
        // $data = $request->validate([
        //     'name' => 'required|min:5',
        //     'address' => 'required',
        //     'phone' => ['required', 'numeric', new PhoneNumber] //PhoneNumber bu custom rule bo'lib, u Rules joylashadi, php artisan make:rule RuleName komandasi bilan yaratiladi
        // ]);

        $company->update($request->validated());


        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        // dd($company);
        $company->delete();

        return redirect()->route('companies.index');
    }

    public function validateData() { // Validatsiyani create, update da ham bitta metodda bajariladi, bundan tashqari umumiy validatsiyalar uchun php artisan make:request requestName komandasi bilan request obyektini yaratish mumkin, bu obyekt app/Http/Requests da joylashadi
        return request()->validate([
            'name' => 'required|min:5',
            'address' => 'required',
            'phone' => ['required', 'numeric', new PhoneNumber] //PhoneNumber bu custom rule bo'lib, u Rules joylashadi, php artisan make:rule RuleName komandasi bilan yaratiladi
        ]);
    }
}
