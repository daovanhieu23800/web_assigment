<?php include "user/header.php"?>
   
<div id="form" class="container my-5">
        <div id="title">
            <b>Create Topic</b>
        </div>

        <div class="form-body">
            <label><b>Topic:</b></label>
            <input id="topic" name="topic" type="text" placeholder="Topic">
        </div>
        <div class="form-body-2">
            <label><b>Level:</b></label>
            <select name="level"  id="level">
                   
                    <option selected="select" value="1">Easy</option>
                    <option value="2">Medium</option>
                    <option value="3">Difficult</option>
                  </select>
        </div>
        

        <div class="form-body-4">
            <button id="submit-button" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
            Create
          </button>
        </div>



    </div>
    <script src="create_topic.js"></script>

    <?php include "user/footer.php"?>
    <style>
        #form {
            height: 250px;
            width: 450px;
            border-radius: 10px;
            background: white;
            margin-left: 410px;
            border-style: double;
        }
        
        #title {
            height: 60px;
            margin-top: 2px;
            border-radius: 10px;
            text-align: center;
            color: black;
            font-size: 30px;
        }
        
        .form-body {
            height: 40px;
            padding-left: 40px;
        }
        
        .form-body-2 {
            height: 50px;
            padding-left: 44px;
        }
        
        .form-body-3 {
            height: 150px;
            display: flex;
            flex: 1;
            padding-left: 10px;
        }
        
        .form-body-1 {
            display: flex;
            height: 70px;
        }
        
        .form-body-5 {
            display: flex;
            height: 70px;
        }
        
        .form-body-4 {
            margin-top: 30px;
            height: 80px;
            padding-left: 180px;
        }
        
        .form-body-3-1 {
            padding-left: 4px;
           
        }
        
        .form-body-3-2 {
            padding-left: 6px;
        }
        
        .form-body-1-1 {
            padding-left: 30px;
        }
        
        .form-body-5-1 {
            padding-left: 30px
        }
        
        .form-body-6 {
            height: 40px;
            padding-left: 225px;
        }
        
        input[type="text"] {
            text-decoration: none;
        }
    </style>
    
</body>

</html>