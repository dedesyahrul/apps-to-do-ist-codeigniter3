<div class="row mb-4">
    <div class="col-md-12">
        <h1 class="float-start"><?php echo $title; ?></h1>
        <a href="<?php echo base_url('todo/add'); ?>" class="btn btn-primary float-end">
            <i class="fas fa-plus"></i> Tambah Tugas Baru
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if(empty($todos)): ?>
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Tidak ada tugas yang ditemukan. Klik tombol "Tambah Tugas Baru" untuk membuat tugas.
            </div>
        <?php else: ?>
            <div class="list-group">
                <?php foreach($todos as $todo): ?>
                    <div class="list-group-item todo-item">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1 <?php echo ($todo->status == 1) ? 'completed' : ''; ?>">
                                    <?php echo $todo->title; ?>
                                </h5>
                                <p class="mb-1 <?php echo ($todo->status == 1) ? 'completed' : ''; ?>">
                                    <?php echo $todo->description; ?>
                                </p>
                                <small class="text-muted">
                                    Dibuat: <?php echo date('d M Y H:i', strtotime($todo->created_at)); ?>
                                </small>
                            </div>
                            <div class="btn-group">
                                <a href="<?php echo base_url('todo/toggle_status/'.$todo->id); ?>" class="btn btn-sm <?php echo ($todo->status == 1) ? 'btn-secondary' : 'btn-success'; ?>">
                                    <i class="fas <?php echo ($todo->status == 1) ? 'fa-undo' : 'fa-check'; ?>"></i>
                                </a>
                                <a href="<?php echo base_url('todo/edit/'.$todo->id); ?>" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?php echo base_url('todo/delete/'.$todo->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div> 
