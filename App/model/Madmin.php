<?php

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table('admin')]

class Madmin
{
#[ORM\Column, ORM\GeneratedValue, ORM\Id]
private int $id;

#[ORM\Column]
private string $password;

#[ORM\Column(unique: true)] 

private string $email;

private static $entity = Madmin::class;

public function getId(): int 
{
    return $this->id;
}
public function getPassword(): string  
{
    return $this->password;
}
public function getEmail(): string
{
    return $this->email;
}
public function setId(int $id): void
{
    $this->id = $id;
}
public function setPassword($password): static
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }
public function setEmail(string $email): void
{
    $this->email = $email;
}

public static function getEntity(): mixed
{
return self::$entity;
}
public function  __construct(string $Email)
{
        $this->email = $Email;
}
}
?>