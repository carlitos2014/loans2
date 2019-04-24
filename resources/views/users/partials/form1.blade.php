<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Perfil</a></li>
      <li><a href="#profile" data-toggle="tab">Contraseña</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <div class="form-group">
            {{ Form::label('name', 'Nombre') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
            </div>
            <div class="form-group">
            {{ Form::label('last_name', 'Apellido') }}
            {{ Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last_name']) }}
            </div>
            <div class="form-group">
            {{ Form::label('user_name', 'Nombre de Usuario') }}
            {{ Form::text('user_name', null, ['class' => 'form-control', 'id' => 'user_name']) }}
            </div>
            <div class="form-group">
            {{ Form::label('email', 'Correo') }}
            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
            </div>
            <hr>
            <h3>Lista de roles</h3>
            <div class="form-group">
              <ul class="list-unstyled">
              @foreach($roles as $role)
            <li>
            <label>
            {{ Form::checkbox('roles[]', $role->id, null) }}
            {{ $role->name }}
            <em>({{ $role->description }})</em>
          </label>
      </li>
      @endforeach
    </ul>
</div>
          <div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
    <form id="tab2">
        <div class="form-group">
          {{ Form::label('password', 'Contraseña') }}
          {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}
        </div>
        <div class="form-group">
  {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
    </form>
      </div>
  </div>
