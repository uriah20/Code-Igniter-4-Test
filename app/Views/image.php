<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Image Manipulation</title>
  </head>
  <body>
    
    <div>
        <h1>Image Manipulation</h1>
        <?php if(isset($validation)) : ?>
            <div class="text-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif ?>
        <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload File</label>
            <input type="file" multiple name="theFile[]" class="form-control-file" id="exampleFormControlFile1">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if(isset($image)) : ?>
            <div class="row">
                <div class="cold-md-4 mt-4">
                    <h4>Original</h4>
                    <img src="<?= src($image) ?>" class="img-fluid">
                </div>
            <?php foreach ($folders as $folder) :?>
                <div class="cold-md-4 mt-4">
                    <h4><?= ucfirst($folder) ?></h4>
                    <img src="<?= src($image, $folder) ?>" class="img-fluid">
                </div>
            <?php endforeach ?>
            </div>
        <?php endif ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>