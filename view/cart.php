<?php include ("header.php"); ?>

<div class="container main-container">

    <div class="row" my-4>
        <div class="col-lg-8">
            <h3 class="mt-2 text-danger">Cart</h3>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="images/supp1.jpg" alt="" width="30" height="30"/></td>
                
                        <td>R200</td>
                        <td>2</td>
                        <td>R400</td>
                    </tr>
                   
                   
                </tbody>
            </table>

        </div>

        <?php include ("sidebar.php"); ?>

    </div>



</div>

<?php include ("footer.php"); ?>