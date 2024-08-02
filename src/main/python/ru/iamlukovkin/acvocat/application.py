import os


class Application:
    __MAIN_PATH: str = '/'.join(os.path.abspath(__file__).split("/")[:-5])

    @classmethod
    def get_project_path(cls):
        return cls.__MAIN_PATH

    @staticmethod
    def main() -> int:
        print(Application.get_project_path() + "/resources/database/" + 'db.sqlite3')
        return 0


if __name__ == "__main__":
    Application.main()
