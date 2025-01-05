<div class="container" ng-controller="LoginController">
    <div class="login-form">
        <h2>{{message}}</h2>
        <form ng-submit="login()">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" ng-model="credentials.username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" ng-model="credentials.password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>