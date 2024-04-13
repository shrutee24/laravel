<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  background-color: #f1f1f1;
}

body,
input {
  color: #1a1a1a;
}

main {
  min-height: 100vh;

  display: grid;
  place-items: center;

  padding: 2em;
}

/* Subscribe Card */
.subscribe-card {
  position: relative;

  padding: 3em 4em;

  background-color: white;
  box-shadow: 2px 0 15px -2px rgba(0, 0, 0, 0.2);

  border-radius: 12px;

  display: grid;
  row-gap: 1.6em;
  
  transition: all .1s ease-in-out;
}

.subscribe-card > h2 {
  color: #3e54ac;

  font-weight: 800;
  font-size: 1.8em;

  text-align: center;
}

.subscribe-card > p {
  line-height: 1.8;
  font-weight: 400;

  text-align: center;

  opacity: 0.9;
}

.form-email {
  margin-top: 1em;

  display: grid;
  row-gap: 1.6em;
}

.input-email {
  padding: 1em;

  background-color: #ecf2ff;

  border: none;
  outline: none;
  border-radius: 7px;

  font-weight: 500;
}

/* Error Message */
.error-message {
  font-size: 0.8em;
  font-weight: 400;
  
  color: red;
  
  display: none;
}

.input-email:not(:placeholder-shown):invalid
~ .error-message {
  display: block;
}





















.send-button {
  display: flex;
  align-items: center;
  justify-content: center;

  gap: 1em;
  padding: 0.8em;

  color: white;
  background-color: #655dbb;

  border: none;
  border-radius: 7px;

  font-weight: 600;

  cursor: pointer;
}

@media (hover: hover) {
  .send-button:hover {
    background-color: #bface2;
    color: #4e31aa;

    transition: all 0.1s ease-in-out;
  }
}

</style>
<body>
<main>
  <div class="subscribe-card">
    <h2>Stay up to date!</h2>
    <p>
      Subscribe to our weekly newsletter for <br />
      the latest news and tips.
    </p>

    <form class="form-email"  action="{{ url('/getEmail')}}">
      <input type="email" name="email"
             placeholder="email@example.com" 
             class="input-email" required>

      <p role="alert" class="error-message">
        *Please enter a valid email address!
      </p>
      
      <button type="submit" class="send-button">
        Subscribe now
      </button>
    </form>
  </div>
</main>
</body>
</html>