<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "phpimports/styleImports.php"; ?>
        <?php require "config/config.php"; ?>
        <link rel="icon" type="image/png" href="favicon.png" />
        <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css"/>
        <script defer src="https://pyscript.net/latest/pyscript.js"></script>
        <link rel="stylesheet" href="css/examples.css" />
        <title>Projet</title>
    </head>
    <body>
        <?php include 'phpimports/navbar.php'; ?>

        <section class="pyscript">
            <py-tutor modules="./utils.py;./todo.py">
                <py-config>
                    [[fetch]]
                    files = ["./utils.py", "./todo.py"]
                </py-config>

                <py-script src="./todo.py"></py-script>
            </py-tutor>
            <main>
                <section>
                    <div class="text-center w-full mb-8">
                        <h1
                            class="text-3xl font-bold text-gray-800 uppercase tracking-tight"
                        >
                            To Do List
                        </h1>
                    </div>
                    <div>
                        <input
                            id="new-task-content"
                            class="py-input"
                            type="text"
                        />
                        <button
                            id="new-task-btn"
                            class="py-button"
                            type="submit"
                            py-click="add_task()"
                        >
                            Add task
                        </button>
                    </div>

                    <py-list id="myList"></py-list>
                    <div
                        id="list-tasks-container"
                        class="flex flex-col-reverse mt-4"
                    ></div>

                    <template id="task-template">
                        <section class="task py-li-element">
                            <label for="flex items-center p-2 ">
                                <input class="mr-2" type="checkbox" />
                                <p class="m-0 inline"></p>
                            </label>
                        </section>
                    </template>
                </section>
            </main>
        </section>

        <?php include 'phpimports/footer.php'; ?>

        <?php include "phpimports/scriptImports.php"; ?>
    </body>
</html>