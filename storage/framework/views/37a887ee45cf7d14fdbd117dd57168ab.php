
<?php $__env->startSection('dashContent'); ?>
<form action="<?php echo e(Request::segment(2)=='add'?route('Webpage.save'):route('Webpage.update',['id'=>Request::segment(2)])); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div class="container">
    <div class="mb-3 w-50">
      <label for="page_name" class="form-label">Page Name</label>
      <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Page Name" value="<?php echo e(isset($data->name)?$data->slug:''); ?>">
    </div>
    <div class="mb-3 w-50">
      <label for="page_slug" class="form-label">Page Slug</label>
      <input type="text" class="form-control" id="page_slug" name="page_slug" placeholder="Page Slug" value="<?php echo e(isset($data->slug)?$data->slug:''); ?>">
    </div>
    <div class="mb-3 w-50">
      <label for="page_content" class="form-label">Page Content</label>
      <textarea id="editor" class="form-control" name="page_content" rows="10"><?php echo e(isset($data->html) ? $data->html : old('page_content')); ?></textarea>
    </div>
    <div class="mb-3 w-50">
      <label for="page_status" class="form-label">Page status</label>
      <select class="form-select" name="page_status" aria-label="Default select example">
        <option selected>Set Status</option>
        <option value="1" <?php echo e(isset($data->status) && $data->status == 1 ? 'selected' : ''); ?> >Active</option>
        <option value="2" <?php echo e(isset($data->status) && $data->status == 2 ? 'selected' : ''); ?> >Inactive</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary"><?php echo e(Request::segment(2)=='add'?'Save':'Update'); ?></button>
  </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminDashboard.Layout.adminBaseView', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bookingms\bookingms\resources\views/AdminDashboard/WebPage/addEdit.blade.php ENDPATH**/ ?>