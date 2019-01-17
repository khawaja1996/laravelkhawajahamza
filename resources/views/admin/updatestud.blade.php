@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Student </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
                     <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                         <table>
                            <tr>
                               <td>Name</td>
                               <td>
                                  <input type = 'text' name = 'name' 
                                     value = '<?php echo $users[0]->name; ?>'/>
                               </td>
                            </tr>
                             
                              <tr>
                               <td>Email</td>
                               <td>
                                  <input type = 'email' name = 'email' 
                                     value = '<?php echo $users[0]->email; ?>'/>
                               </td>
                            </tr>
                             
                              <tr>
                               <td>Password</td>
                               <td>
                                  <input type = 'password' name = 'pass' 
                                     value = '<?php echo $users[0]->password; ?>'/>
                               </td>
                            </tr>
                            <tr>
                               <td colspan = '2'>
                                  <input type ="submit" value = "Update student" />
                               </td>
                            </tr>
                         </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
