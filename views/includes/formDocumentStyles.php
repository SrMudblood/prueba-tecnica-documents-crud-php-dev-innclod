<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: #f8f9fa;
        height: 100vh;
    }

    .container {
        max-width: 768px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    form {
        padding: 1.5em;
        background-color: #ffffff;
        width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    textarea,
    select {
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 1rem;
    }

    textarea {
        resize: none;
    }

    input[type="text"]:focus,
    textarea:focus,
    select:focus {
        border-color: #80bdff;
    }

    button[type="submit"],
    button[type="button"] {
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: darkgreen;
        color: #ffffff;
        font-size: 1rem;
        font-weight: bolder;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    button[type="button"] {
        background: red !important;
    }

    button[type="submit"]:hover {
        background: #025202 !important;
    }

    button[type="submit"]:active {
        background: #025202 !important;
    }

    @media (max-width: 768px) {

        .container {
            max-width: 100%;
            width: 100%;
            padding: 0;
            height: 100%;
        }

        .form-group {
            margin-bottom: 1.5em;
        }

        form {
            max-width: 100%;
            width: 100%;
            height: 100%;
            border-radius: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        #buttons {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        #buttons button {
            width: 50%;
            border-radius: 0;
        }
    }
</style>