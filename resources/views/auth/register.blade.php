<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>

    @error('name')
    <div>{{ $message }}</div>
    @enderror

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
    @error('email')
    <div>{{ $message }}</div>
    @enderror

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>
    @error('password')
    <div>{{ $message }}</div>
    @enderror

    <label for="password_confirmation">Confirm Password:</label><br>
    <input type="password" id="password_confirmation" name="password_confirmation" required><br>
    <br>
    <button type="submit">Register</button>
</form>
</body>
</html>
