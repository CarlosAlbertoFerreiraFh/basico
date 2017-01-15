<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('name','Nome',array('class' => 'control-label')) !!}	
			{!! Form::text('name',null,array('class' => 'form-control')) !!}	
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('city','Cidade',array('class' => 'control-label')) !!}	
			{!! Form::text('city',null,array('class' => 'form-control')) !!}	
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('state','Estado',array('class' => 'control-label')) !!}	
			{!! Form::select('state', $customersForSelect, null, ['class' => 'form-control']) !!}	
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			{!! Form::label('special_customer','Cliente Especial',array('class' => 'control-label')) !!}	
			{!! Form::checkbox('special_customer',$customer->special_customer,array('class' => 'form-control')) !!}	
		</div>
	</div>	
</div>
<button type="submit" class="btn btn-primay">Salvar</button>