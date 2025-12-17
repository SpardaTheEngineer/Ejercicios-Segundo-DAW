<?php


class GangaController
{

    public function login()
    {

        $error = null;

        require_once __DIR__ . '/../models/Database.php';
        require_once __DIR__ . '/../models/User.php';

        require __DIR__ . '/../views/login.php';

        session_start();

        // Inicializar BD
        new Database();

        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = User::login($email, $password);

            if ($user) {
                // Guardar usuario en sesión
                $_SESSION['user_id'] = $user->getId();
                $_SESSION['user_nickname'] = $user->getNickname();

                // Redirigir al listado de gangas
                header('Location: index.php?action=listarGangas');
                exit;
            } else {
                $error = 'Email o contraseña incorrectos';
            }
        }
    }

    public function register()
    {

        $error = null;

        require_once __DIR__ . '/../models/Database.php';
        require_once __DIR__ . '/../models/User.php';

        require __DIR__ . '/../views/register.php';

        session_start();
        new Database();

        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nickname = $_POST['nickname'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($nickname && $email && $password) {
                try {
                    $user = new User(null, $nickname, $email, $password);
                    $user->register();

                    // Login automático tras registro
                    $_SESSION['user_id'] = $user->getId();
                    $_SESSION['user_nickname'] = $user->getNickname();

                    header('Location: index.php?action=login');
                    exit;
                } catch (Exception $e) {
                    $error = 'El email ya está registrado';
                }
            } else {
                $error = 'Todos los campos son obligatorios';
            }
        }
    }

    public function listarGangas()
    {

        require_once __DIR__ . '/../models/Database.php';
        require_once __DIR__ . '/../models/User.php';
        require_once __DIR__ . '/../models/Ganga.php';

        session_start();

        new Database();
        // Conectar a la base de datos
        $db = Database::getConnection();

        // Si no hay sesión, redirigir al login
        if (!isset($_SESSION['user_nickname'])) {
            header('Location: index.php?action=login');
            exit;
        }

        $user = User::getById($_SESSION['user_id']);

        $gangas = Ganga::getAll();
        require __DIR__ . '/../views/listado_gangas.php';

    }

    public function like()
    {

        require_once __DIR__ . '/../models/Database.php';
        require_once __DIR__ . '/../models/User.php';

        session_start();
        new Database();

        if (!isset($_SESSION['user_id'], $_GET['ganga_id'])) {
            header('Location: login.php');
            exit;
        }

        $user = User::getById($_SESSION['user_id']);
        $ganga_id = (int) $_GET['ganga_id'];

        // Toggle like
        if ($user->hasLiked($ganga_id)) {
            $user->unlikeGanga($ganga_id);
        } else {
            $user->likeGanga($ganga_id);
        }

        // Volver a la página anterior (listado o filtrado)
        $redirect = $_SERVER['HTTP_REFERER'] ?? 'index.php?action=listarGangas';
        header("Location: $redirect");
        exit;

    }

    public function filtrar()
    {

        require_once __DIR__ . '/../models/Database.php';
        require_once __DIR__ . '/../models/Hashtag.php';
        require_once __DIR__ . '/../models/User.php';

        session_start();

        // Inicializar base de datos
        new Database();

        $db = Database::getConnection();
        // Si no hay sesión, redirigir al login
        if (!isset($_SESSION['user_nickname'])) {
            header('Location: index.php?action=login');
            exit;
        }

        // Verificar si hay filtro de categoría
        if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
            $categoria = $_GET['categoria'];
            $gangas = Hashtag::getGangasByNombre($categoria);
            $user = User::getById($_SESSION['user_id']);
        } else {
            // Por seguridad, si no hay categoría, puedes redirigir o mostrar todas
            $gangas = Ganga::getAll();
        }

        require __DIR__ . '/../views/filtrado_gangas.php';
    }
}
