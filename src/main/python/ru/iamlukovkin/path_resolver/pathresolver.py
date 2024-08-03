import os


class PathResolver:
    __MAIN_PATH: str = '/'.join(os.path.abspath(__file__).split("/")[:-5])

    @classmethod
    def get_project_path(cls) -> str:
        return cls.__MAIN_PATH
