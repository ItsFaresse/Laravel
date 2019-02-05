@extends('layouts/layoutBack')

@section('content')

    
    <ul style="list-style: none;">

     @foreach($categories as $category)
       <div class="form-group">           
            <table class="table">
            <thead>
             <tr>
                <th class="form-control">
                <li> <a class="badge badge-primary" href="{{route('categories.show', $category->id)}}">{{$category->name}} </a> </li>
                </th>
             </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
           

      



     @endforeach
    </ul>
            

    <p><a class='btn btn-success' href="{{route('categories.create')}}">Créer une catégorie</a></p>


@stop