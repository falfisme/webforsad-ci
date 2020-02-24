<?php if ($this->session->flashdata('sukses')){
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';  
} ?>
<form action="<?php echo base_url().'berita/edit_post'?>" method="post" enctype="multipart/form-data">

<div class="form-group row">
    <label class="col-md-2 col-form-label">Judul Berita</label>
    <div class="col-md-8">
        <input type="text" name="judul" class="form-control" placeholder="Judul berita" value="<?php echo $berita->judul ?>"required/><br/>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Tulis Berita</label>
    <div class="col-md-8">
        <textarea id="ckeditor" name="berita" class="form-control" required><?php echo $berita->isi ?></textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Input Gambar Berita</label>
    <div class="col-md-5">
        <input type="file" name="filefoto" value="<?php echo $berita->gambar ?>"><br>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Nama Penulis</label>
    <div class="col-md-5">
        <input type="text" name="penulis" value="<?php echo $berita->penulis ?>" class="form-control" placeholder="Nama Penulis" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Departemen</label>
    <div class="col-md-5">
        <input type="text" name="departemen" class="form-control" value="<?php echo $berita->departemen ?>"  placeholder="Nama Departemen" required/>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label">Keterangan Status Tampil</label>
    <div class="col-md-5">
        <select name="keterangan" value="<?php echo $berita->keterangan ?>"  class="form-control">
            <option value="Draft">Draft</option>
            <option value="Publish">Publish</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 col-form-label"></label>
    <div class="col-md-5">
       <button class="btn btn-success btn-lg" name="submit" type="submit">
           <i class="fa fa-save"></i> Edit Berita
       </button>
    </div>
</div>

</form>     

