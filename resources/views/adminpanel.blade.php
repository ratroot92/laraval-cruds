<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="admin panel new css.css">
</head>

<body>
    <div class="container">

        <div style="background-color: rgb(100, 35, 35);" class="sideArea">
            <div class="avatar">
                <img src="user icon.png" alt="">
                <div class="avatarName">Welcome,<br>Admin</div>
            </div>
            <ul class="sideMenu">
                <li><a href="javascript:void(0)" class="has-submenu"><span class="fa fa-table"></span>All Products</a>
                </li>
                <li><a href="javascript:void(0)" class="has-submenu track"><span
                            class="fa fa-address-book"></span>Track
                        Orders</a>
                </li>
            </ul>
        </div>
       
        <div class="mainArea">
           
            <div class="mainContent">
            <div class="formHeader row">
                        <h2 class="text-1 fl">ADD NEW PRODUCT </h2>
                        <div class="fr">
                            <button style="background-color: rgb(69, 141, 163);" type="submit"
                                class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
                        </div>
                    </div>
            <form action="/adminpanel" method="post" enctype="multipart/form-data"> 
            
            @csrf <table width="0px" border="5px"  align="left"> <tr>
            
              <tr> <td valign="top"> <label for="first_name">Product Name</label> </td> 
              <td valign="top"> <input type="text" name="Name" maxlength="50" size="30">
              </td> </tr> <tr> <td valign="top"> <label for="Price">Price</label> </td> 
              
              <td valign="top"> <input type="text" name="last_name" maxlength="50" size="30"> </td> 
              </tr> <tr> <td valign="top"> <label for="Description">Description</label> </td>
               <td valign="top"> <input type="text" name="Description" maxlength="30" size="30"> </td> 
               </tr> <tr> <td valign="top"> <label for="Image">Image</label>
                </td> <td valign="top"> <input type="file" name="Image" maxlength="50" size="30"> </td>
                
                   </td>

                   </tr> <tr> <td colspan="2" style="text-align:center">
                    <input type="submit" value="Submit"> </td> </tr> </table> </form>
                     
            <!--
              
                <form action="/adminpanel" method="POST" enctype="multipart/form-data" class="form">
                    <div class="formHeader row">
                        <h2 class="text-1 fl">ADD NEW PRODUCT </h2>
                        <div class="fr">
                            <button style="background-color: rgb(69, 141, 163);" type="submit"
                                class="btnSave bg-1 text-fff text-bold fr">SAVE</button>
                        </div>
                    </div>
                    <div class="formBody row">
                        <div class="column s-6">
                            <label class="inputGroup">
                                <span>Product Name</span>
                                <span><input type="text" name="name"></span>
                            </label>
                           
                            <label class="inputGroup">
                                <span> New Price</span>
                                <span><input type="text" name="price"></span>
                            </label>
                            <label class="inputGroup">
                                <span>Old Price</span>
                                <span><input type="text" name="prev"></span>
                            </label>
                        </div>
                        <div class="column s-6">
                            
                            <label class="inputGroup">
                                <span>Image</span>
                                <span><input type="text" name="imageInput"></span>
                            </label>
                        </div>
                        <div class="column">
                            <label class="inputGroup">
                                <span>Description of the Product</span>
                                <textarea name="description"></textarea>
                            </label>
                        </div>
                    </div>
                </form>

               
              -->

            </div>
       
        </div>
    </div>





</body>

</html>