<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login - Smart Village</title>
      <meta name="description" content="Smart Village, make your enjoy">
      <link href="assets/login/logo-lanis.png" rel="icon">
      <link href="assets/login/login.css" rel="stylesheet">
   </head>
   <body class="d-flex flex-column">
      <div class="bg-base-1 d-flex align-items-center flex-fill">
         <div class="container h-">
            <div class="text-center">
               <h2 class="mb-3 d-inline-block d-block d-lg-none">Login</h2>
            </div>
            <div class="row h-100 justify-content-center align-items-center">
               <div class="col-12">
                  <div class="card border-0 shadow-sm my-3 overflow-hidden">
                     <div class="row no-gutters">
                        <div class="col-12 col-lg-5">
                           <div class="card-body p-lg-5">
                             <div class="logo">
                                <img src="assets/login/logo-lanis.png">
                             </div><br>
                             @if(session()->has('error'))
                              @dd(session()->has('error'))
                             @endif
                              <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                 <div class="form-group">
                                    <x-jet-label for="i_email" value="{{ __('Email') }}"></x-jet-label>
                                    <x-jet-input id="i_email" type="email" dir="ltr" class="form-control" name="email" value="" required autofocus/>
                                 </div>
                                 <div class="form-group">
                                    <x-jet-label for="i_email" value="{{ __('Password') }}"></x-jet-label>
                                    <x-jet-input id="i_password" type="password" class="form-control" name="password" required/>
                                 </div>
                                 <button type="submit" class="btn btn-block btn-primary py-2">
                                 Login
                                 </button>
                              </form>
                           </div>
                           <div class="card-footer bg-base-2 border-0">
                              <div class="text-center text-muted my-2">© 2020 LANIS IT Support & Maintenance.</div>
                           </div>
                        </div>
                        <div class="col-12 col-lg-7 bg-dark d-none d-lg-flex flex-fill bg-left-bottom bg-cover" style="background-image: url(assets/login/cover-lanis.svg)">
                           <div class="card-body p-lg-5 d-flex flex-column flex-fill position-absolute" style="top: 0; right: 0; bottom: 0; left: 0">
                              <div class="d-flex align-items-center d-flex flex-fill">
                                 <div class="text-white-important ml-5">
                                    <div class="h2 font-weight-bold d-none d-lg-block">
                                       Login
                                    </div>
                                    <div class="font-size-lg font-weight-medium">
                                       Welcome back —
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>