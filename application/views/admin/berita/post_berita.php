<?php if ($this->session->flashdata('sukses')){
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';  
} ?>
<form action="<?php echo base_url().'berita/simpan_post'?>" method="post" enctype="multipart/form-data">

<div class="form-group row">
    <label class="col-md-2 col-form-label">Judul Berita</label>
    <div class="col-md-8">
        <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Tulis Berita</label>
    <div class="col-md-8">
        <textarea id="ckeditor" name="berita" class="form-control" required></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Input Gambar Berita</label>
    <div class="col-md-5">
        <input type="file" name="filefoto" required><br>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Nama Penulis</label>
    <div class="col-md-5">
        <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Departemen</label>
    <div class="col-md-5">
        <input type="text" name="departemen" class="form-control" placeholder="Nama Departemen" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Keterangan Status Tampil</label>
    <div class="col-md-5">
        <select name="keterangan" class="form-control">
            <option value="Draft">Draft</option>
            <option value="Publish">Publish</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-5">
       <button class="btn btn-success btn-lg" name="submit" type="submit">
           <i class="fa fa-save"></i> Simpan Berita
       </button>
    </div>
</div>

</form>     

