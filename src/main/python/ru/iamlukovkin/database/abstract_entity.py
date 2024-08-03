from abc import ABC
from ru.iamlukovkin.database import PrimaryKey


class AbstractEntity(ABC):
    __pk: PrimaryKey

    def __init__(self, pk: PrimaryKey):
        self.pk = pk

    @property
    def pk(self) -> PrimaryKey:
        return self.pk

    @pk.setter
    def pk(self, pk: PrimaryKey) -> None:
        self.__pk = pk

    def __eq__(self, other):
        if not isinstance(other, AbstractEntity):
            return False
        other: AbstractEntity
        return self.pk.__eq__(other.pk)
