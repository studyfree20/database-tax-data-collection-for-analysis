<!DOCTYPE html>
<html>
  <head>
    <title>Flag</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
      
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Flag and alert!</h1>
          </div>
          <div class="panel-body">
            <form action="flagscript.php" method="POST">
              <div class="form-group">
                <label for="product_number">Product number</label>
                <input
                  type="text"
                  class="form-control"
                  id="product_number"
                  name="product_number"
                />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input
                  type="text"
                  class="form-control"
                  id="description"
                  name="description"
                />
              </div>
              <div class="form-group">
                <label for="quantity">Quantity</label>
                <input
                  type="number"
                  class="quantity"
                  id="quantity"
                  name="quantity"
                />
              </div>
              <div class="form-group">
                <label for="unit_weight">Unit weight</label>
                <input
                  type="number"
                  class="form-control"
                  id="unit_weight"
                  name="unit_weight"
                />
              </div>
             <div class="form-group">
                <label for="declared_value">Declared value</label>
                <input
                  type="number"
                  class="form-control"
                  id="declared_value"
                  name="declared_value"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>

</body>
</html>

