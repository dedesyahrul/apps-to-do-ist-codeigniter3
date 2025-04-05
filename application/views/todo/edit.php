<div class="row mb-4">
    <div class="col-md-12">
        <h1><?php echo $title; ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <?php echo form_open('todo/edit/'.$todo->id); ?>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control <?php echo (form_error('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?php echo set_value('title', $todo->title); ?>" required>
                        <?php echo form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control <?php echo (form_error('description')) ? 'is-invalid' : ''; ?>" id="description" name="description" rows="5" required><?php echo set_value('description', $todo->description); ?></textarea>
                        <?php echo form_error('description', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="status" name="status" value="1" <?php echo ($todo->status == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="status">
                                Tandai sebagai selesai
                            </label>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?php echo base_url('todo'); ?>" class="btn btn-secondary me-md-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Perbarui Tugas</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Detail Tugas</h5>
            </div>
            <div class="card-body">
                <p><strong>Dibuat:</strong> <?php echo date('d M Y H:i', strtotime($todo->created_at)); ?></p>
                <p><strong>Status:</strong> <?php echo ($todo->status == 1) ? '<span class="badge bg-success">Selesai</span>' : '<span class="badge bg-warning">Belum Selesai</span>'; ?></p>
            </div>
        </div>
    </div>
</div> 
