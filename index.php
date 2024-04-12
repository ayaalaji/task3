<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP && MYSQL</title>
</head>
<body>
    <style>
      body {
        background-color: #212121;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .form-container {
        width: 500px;
        background: linear-gradient(#212121, #212121) padding-box,
          linear-gradient(145deg, transparent 35%, #e81cff, #40c9ff) border-box;
        border: 2px solid transparent;
        padding: 32px 24px;
        font-size: 14px;
        font-family: inherit;
        color: white;
        display: flex;
        flex-direction: column;
        gap: 20px;
        box-sizing: border-box;
        border-radius: 16px;
        background-size: 200% 100%;
        animation: gradient 5s ease infinite;
      }

      @keyframes gradient {
        0% {
          background-position: 0% 50%;
        }

        50% {
          background-position: 100% 50%;
        }

        100% {
          background-position: 0% 50%;
        }
      }

      .form-container button:active {
        scale: 0.95;
      }

      .form-container .form {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }

      .form-container .form-group {
        display: flex;
        flex-direction: column;
        gap: 2px;
      }

      .form-container .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #717171;
        font-weight: 600;
        font-size: 12px;
      }

      .form-container .form-group input {
        width: 100%;
        padding: 10px 11px;
        border-radius: 8px;
        color: #fff;
        font-family: inherit;
        background-color: transparent;
        border: 1px solid #414141;
      }

      .form-container .form-group input::placeholder {
        opacity: 0.5;
      }

      .form-container .form-group input:focus {
        outline: none;
        border-color: #e81cff;
      }

      .form-container .form-submit-btn {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        align-self: flex-start;
        font-family: inherit;
        color: #717171;
        font-weight: 600;
        width: 40%;
        background: #313131;
        border: 1px solid #414141;
        padding: 12px 16px;
        font-size: inherit;
        gap: 8px;
        margin-top: 60px;
        cursor: pointer;
        border-radius: 6px;
      }

      .form-container .form-submit-btn:hover {
        background-color: #fff;
        border-color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <form class="form" action="user-valid.php" method="POST">
        <div class="form-group">
          <label for="text">User Name</label>
          <input required name="username" id="username" type="text"/>
        </div>
        <div class="form-group">
          <label for="text">Phone</label>
          <input required name="phone" id="phone" type="number"  />
        </div>
        <button type="submit" class="form-submit-btn " name="submit">Submit</button>
      </form>
    </div>
 
</body>
</html>