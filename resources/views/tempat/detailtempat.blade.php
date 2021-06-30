@extends('layouts.receppe')
@section('title','List Resep')
@section('content')
<div id="addEmployeeModal">
	<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Detail Data</h4>
                </div>
                @foreach($tempats as $t)
				<div class="modal-body">
						<label>Nama Tempat</label>
						<input type="text" name="nama" required="required" value="{{ $t->NamaTempat }}" class="form-control" required readonly>
						<label>Jurusan</label>
						<input type="text" name="jurusan" required="required" value="{{ $t->DeskripsiTempat }}" class="form-control" required readonly>
						<label>IPK</label>
						<input type="text" name="ipk" required="required" value="{{ $t->Kota }}" class="form-control" required readonly>
				</div>
				<div class="modal-footer">
                    <a href="" class="btn btn-danger"><span>kembali</span></a>
                </div>
                @endforeach
		</div>
	</div>
</div>
@endsection
