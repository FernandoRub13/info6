@extends('layouts.master')

@section('content')
<h1>Categorias</h1>

<a href= "{{ route('categories.create') }}" class= "btn btn-success">Create</a>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Url</th>
      <th scope="col" colspan = "2" class="text-center">Options</th>
    </tr>
  </thead>
      @foreach ($categories as $category)
      <tr>
        <th scope="row">{{ $category->id}}</th>
        <td>{{ $category -> title }}</td>
        <td>{{ $category -> url_clean }}</td>
        <td>
          <a href="{{route('categories.edit', $category->id) }}"class = "btn btn-secondary">Edit</a>
        </td>
        <td>
              <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $category->id }}" type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach


  <tbody>
</table>

<div class="mt-3">{{ $categories->links() }}</div>


<div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Categorias: </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de borrar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form id="formDelete" action="{{route('categories.destroy', 0)}}" method="POST">
          @csrf
          @method("DELETE")
          <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>



<script >
    var deleteModal = document.getElementById('deleteModal');
    console.log('deleteModal');
  deleteModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var id = button.getAttribute('data-bs-id')
    console.log(id)
    console.log('Hola')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = deleteModal.querySelector('.modal-title')
   // var modalBodyInput = deleteModal.querySelector('.modal-body input')
  
  
    var action = formDelete.getAttribute('action').slice(0, -1) +id;
        // action += id; 
        // console.log(action)
        formDelete.setAttribute('action', action)
    //console.log(formDelete.getAttribute)
  
    modalTitle.textContent = modalTitle.textContent + id;
    //modalBodyInput.value = recipient
  });
</script>
@endsection