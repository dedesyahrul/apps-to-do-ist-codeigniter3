<div class="row mb-4">
    <div class="col-md-12">
        <h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <?php echo form_open('todo/add'); ?>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control <?php echo (form_error('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?php echo set_value('title'); ?>" required>
                        <?php echo form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control <?php echo (form_error('description')) ? 'is-invalid' : ''; ?>" id="description" name="description" rows="5" required><?php echo set_value('description'); ?></textarea>
                        <?php echo form_error('description', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?php echo base_url('todo'); ?>" class="btn btn-secondary me-md-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Tugas</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Tips</h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i> Buat judul yang singkat dan jelas</li>
                    <li><i class="fas fa-check text-success me-2"></i> Tambahkan deskripsi detail untuk tugas yang kompleks</li>
                    <li><i class="fas fa-check text-success me-2"></i> Tandai tugas sebagai selesai ketika sudah selesai</li>
                    <li><i class="fas fa-check text-success me-2"></i> Hapus tugas yang sudah tidak diperlukan lagi</li>
                </ul>
            </div>
        </div>
    </div>
</div> 
