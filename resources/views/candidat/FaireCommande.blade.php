@extends('layouts.candidat')
@section('contenu')

<br>
<br>
<br>

<center>
 <div class="container-fluid pt-4 px-4" style="font-size: 20px;">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">FAIRE UNE COMMANDE</h6>
                    <div class="form-group">
                    <br>    
                    </div>
                    <form method="post" action="" >
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Depart</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="depart"  style="font-size: 20px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Destination</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="destination" style="font-size: 20px;">
                            </div>
                        </div>
                        <br/>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Payement</label>
                             <select class="form-control" name="payement" style="font-size: 20px;" >
                            <option value="" style="font-size: 15px;" >Faites Votre Choix</option>
                            <option value="Electronique" style="font-size: 15px;" >Electronique</option>
                            <option value="Cheque" style="font-size: 15px;" >Cheque</option>
                            <option value="Cash" style="font-size: 15px;" >Cash</option>
                             </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" value="Valider">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</center>



@endsection
