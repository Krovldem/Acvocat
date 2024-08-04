import os

import dotenv

from ru.iamlukovkin.email.controller import PathResolver
from ru.iamlukovkin.email.exception import NotFoundedEnvironmentKey, EmptyEnvironmentException


class EnvKeysController:
    __env_path: str = PathResolver().get_project_path() + "resources/env/.env"

    def __init__(self) -> None:
        if not os.path.exists(self.__env_path):
            raise EmptyEnvironmentException()

    def get_value(self, key: str) -> str:
        key: str = dotenv.get_key(self.__env_path, key)
        if key is None:
            raise NotFoundedEnvironmentKey()
        return key
