<!doctype html>
<html lang="en">

<head>
      <title>Edit Product</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>

<body>

      <div class="container mt-5">
            <div class="card">
                  <div class="card-header">Edit Product</div>
                  <div class="card-body">
                        <?php
                        if (validation_errors() != false) {
                        ?>
                              <div class="alert alert-danger" role="alert">
                                    <?php echo validation_errors(); ?>
                              </div>
                        <?php
                        }
                        ?>

                        <form method="post" action="<?php echo base_url('admin/updateProduct'); ?>">
                              <input type="hidden" name="product_id" id="product_id" value="<?php echo $product->product_id; ?>" />
                              <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $product->name; ?>">
                              </div>

                              <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="<?= $product->description; ?>">
                              </div>

                              <div class="form-group mb-5">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="<?= $product->image; ?>">
                              </div>

                              <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                  </div>
            </div>
      </div>
</body>

</html>