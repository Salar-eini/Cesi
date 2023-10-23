

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container-sm">
    <div class="container-sm">
      <img src="https://sectordisk.com/wp-content/themes/sectordisk/img/sectordisk_logo_header.png" alt="">
        <h2>
        Please fill the form.
        </h2>

    </div>
    

    <form method="post">
        <div>
            <div>
                <label for="gender">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" id="male">
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="other" id="other" checked>
                    <label class="form-check-label" for="other">
                      Other
                    </label>
                  </div>

            </div>
            
            <div>
                <label for="first_name" class="form-label">First Name</label>
                <input name="first_name" id="first_name"  class="form-control " type="text" placeholder="Jack" required>
                <label for="last_name" class="form-label">Last Name</label>
                <input name="last_name" id="last_name"  class="form-control" type="text" placeholder="Jordan" required>
            </div>

            <div>
                <label for="username" class="form-label">User Name</label>
                <input name="username" id="username"  class="form-control " type="text" placeholder="Jack" required>
                <label for="pass" class="form-label">Password</label>
                <input name="pass" id="pass"  class="form-control" type="password" placeholder="********" aria-describedby="passwordHelpInline" min=8 max=25 required>
                  <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                      Must be 8-20 characters long.
                    </span>
                  </div>

            <div>
                <label for="mail">Email</label>
                <input name="mail" type="email" class="form-control" id="mail" placeholder="example@mail.com" required>
            </div>
    
            <div>
                <label for="file_number" class="form-label">File Number</label>
                <input name="file_number" id="file_number"  class="form-control" type="text" placeholder="1234" pattern="[0-9]{4}" required>
            </div>
    
            <div class="form-outline">
                <label class="form-label" for="phone_number">Phone Number </label>
                <input name="phone_number" type="tel" id="phone_number" class="form-control" required placeholder="0758730239 " pattern="[0-9]{10}" required/>
              </div>

            <div class="checkbox-group">
                <label  class="form-label">Type of Files:
                </label>
                <h4></h4>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="file_type" value="image_file" id="image_file" >
                    <label class="form-check-label" for="image_file">
                      Images
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="file_type" value="audio_file" id="audio_file" >
                    <label class="form-check-label" for="audio_file">
                      Audios
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="file_type" value="video_file" id="video_file" >
                    <label class="form-check-label" for="video_file">
                      Videos
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="file_type" value="other_file" id="other_file" >
                    <label class="form-check-label" for="other_file">
                      Others
                    </label>
                </div>


            </div>

            <div>
                <div class="mb-3" >
                    <label for="damage" class="form-label">Type of damage:</label>
                    <select id="damage" class="form-select" name="damage">        
                    <option value="Not_choosed" >Select</option>
                    <option value="Electric" >Electric</option>
                    <option value="Logical"  >Software (Logical)</option>
                    <option value="Physical"  >Hardware (Physical)</option>
                    </select>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" name="insert" class="btn btn-outline-success">Submit</button>
            </div>

            
        </div>
        
    </form>
    <h2>Already Have An Account?</h2>
    <div class="col-12">
      <a class="btn btn-primary" href="http://localhost/login.php#" role="button">Login</a>
      
    </div>

</div>
    
    
</body>
</html>