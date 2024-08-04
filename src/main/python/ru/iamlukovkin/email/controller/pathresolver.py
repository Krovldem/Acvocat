import os


class PathResolver:
    __MAIN_PATH: str = os.path.abspath(__file__)

    @classmethod
    def get_project_path(cls) -> str:
        result: str = ""
        for word in cls.__MAIN_PATH.split("/"):
            result += word + "/"
            if word == "main":
                break
        return result
