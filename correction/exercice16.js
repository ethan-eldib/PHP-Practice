export const response16 = `
            // Les fonctions

            function createMyFile(): string
            {
                if (!empty($_POST['filename'])) {
                    $filename = htmlspecialchars($_POST['filename']);

                    if (file_exists("docs/$filename.txt")) {
                        $result = "Ce fichier existe déjà";
                    } else {
                        if (fopen("docs/$filename.txt", 'w')) {
                            $result = "Le fichier $filename.txt a été créé avec succès";
                        } else {
                            $result = "Une erreur s'est produite lors de la création du fichier";
                        }
                    }
                } else {
                    $result = 'form method="POST">
                                    div class="form-group">
                                        label for="createFile">
                                            Création d\\'un fichier .txt
                                            input class="form-control" type="text" id="createFile" name="filename" />
                                        /label>
                                    /div>
                                    button type="submit" class="btn btn-sm btn-primary">Créer/button>
                                /form>';
                }

                return $result;
            }

            function readMyFile(string $filename): string
            {
                if (!$filename) {
                    return "div class='alert alert-warning'>Veuillez renseigner le nom du fichier à lire./div>";
                }

                if (file_exists("docs/$filename.txt")) {
                    $fileGetContent = file_get_contents("docs/$filename.txt");
                    $result = "p class='border border-secondary rounded p-3 m-5'>
                                    u>Contenu du fichier $filename.txt :/u>
                                    br>br>
                                    $fileGetContent
                                /p>";
                } else {
                    $result = "div class='alert alert-warning'>La lecture du fichier $filename.txt est impossible car il est possible que le fichier n'existe pas. Veuillez vérifier le chemin pour confirmer sa présence./div>";
                }

                return $result;
            }

            function writeMyFile(string $filename): string
            {
                if (!$filename) {
                    return "div class='alert alert-warning'>Veuillez renseigner le nom du fichier à modifier./div>";
                }

                $content = '';

                if (!file_exists("docs/$filename.txt")) {
                    return "div class='alert alert-warning'>Le fichier $filename.txt n'existe pas/div>";
                }

                if (!empty($_POST['writeFile'])) {
                    $content = htmlspecialchars($_POST['writeFile']) . PHP_EOL;

                    if (file_put_contents("docs/$filename.txt", $content, FILE_APPEND | LOCK_EX)) {
                        $result = "p class='alert alert-success'>Le contenu a été écrit dans le fichier $filename.txt avec succès/p>";
                    } else {
                        $result = "p class='alert alert-danger'>Une erreur s'est produite lors de l'écriture du contenu dans le fichier $filename.txt/p>";
                    }
                } else {
                    $result = 'form method="POST" class="m-5">
                                    div class="form-group">
                                        label for="writeFile">
                                            u>Écrire dans le fichier ' . $filename . '.txt/u>
                                            textarea rows="5" placeholder="Votre contenu..." class="form-control" id="writeFile" name="writeFile">' . $content . '/textarea>
                                        /label>
                                    /div>
                                    button type="submit" class="btn btn-sm btn-primary">Valider/button>
                                /form>';
                }

                return $result;
            }

            // Appel des fonctions
                createMyFile() . ' ' . readMyFile('exercice16') . ' ' . writeMyFile('exercice16')
            )`;