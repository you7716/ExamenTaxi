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
                    <h6 class="mb-4"  style="color: white;"  >FAIRE UNE COMMANDE</h6>
                    <div class="form-group">
                    <br>    
                    </div>
                    <form method="" action="{{route('commande.store')}}" >
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" style="color: white;">Depart</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="depart"  style="font-size: 20px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" style="color: white;">Destination</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="destination" style="font-size: 20px;">
                            </div>
                        </div>
                        <br/>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" style="color: white;">Payement</label>
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


    <br /><br /><br /><br /><br />



    <div class="container" style="font-size: 20px; color: white; " >
    <div class="card">
        <div class="card-header bg bg-primary">
            <h3 class="text-center text-white">Commandes</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered " style="border : 3px solid green;">
                <thead class="bg bg-info text-white text-center">
                    <tr>
                        <th># </th>
                        <th>Depart</th>
                        <th>Destination</th>
                        <th>Payement</th>
                    </tr>
                </thead>
                <br>
                <tbody class="text-center">
                    @foreach ($commandes  as  $etud)
                        <tr>
                            <td>{{$etud->id}}</td>
                            &emsp; &emsp; &emsp;
                            <td>{{$etud->depart}}</td>
                            <td>{{$etud->destination}}</td>
                            <td>{{$etud->payement}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</center>







@endsection
