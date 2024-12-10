<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVS-login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nvsaccount.nvsLoginSubmit')}}" method="post">
            @csrf
            <div class="card-header">
                <h1>NVS-login</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="nvsEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" 
                        id="nvsEmail" name="nvsEmail"
                        placeholder="nvsEmail@example.com"/>
                        @error('nvsEmail')
                            <span class="text-danger">{{message}}</span>
                        @enderror
                    <span id="email=error"></span>
                </div>
                <div class="mb-3">
                    <label for="nvsPass" class="form-label">Password</label>
                    <input type="password" class="form-control" 
                        id="nvsPass" name="nvsPass"
                        placeholder="xxxxx"/>
                        @error('nvsPass')
                            <span class="text-danger">{{message}}</span>
                        @enderror
                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>

                @if (\Session::has('nvs-error'))
                    <div class="alert alert-danger">
                            {{ Session::get('nvs-error') }}
                    </div>
                @endif
            </div>
        </form>
    </section>
</body>
</html>