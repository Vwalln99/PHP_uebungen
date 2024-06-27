<?php
namespace Cm\Api\Service;
use Cm\Api\Validation\CustomValidation;
use Cm\Api\Validation\Exception\ValidationException;
use Cm\Api\Entity\User AS UserEntity;
use Cm\Api\ORM\UserModel;
use Ramsey\Uuid\Uuid;
use PH7\PhpHttpResponseHeader\Http;
use PH7\JustHttp\StatusCode;

class User {

	public function __construct(
	){}

	public function create(mixed $data): array|object {
		$validation = new CustomValidation($data);
		if($validation->validate_create()) {
			$uuid = Uuid::uuid4()->toString();
			$user_entity = new UserEntity();

			$user_entity->set_uuid($uuid)
					->set_firstname($data->firstname)
					->set_lastname($data->lastname)
					->set_email($data->email)
					->set_phone($data->phone)
					->set_created_at(date('Y-m-d H:i:s'));

			$valid = $user_uuid = UserModel::create($user_entity);
			if(!$valid) {
				Http::setHeadersByCode(StatusCode::BAD_REQUEST);
				return [];
			}
			$data->uuid = $user_uuid;
			return $data;
		}
		throw new ValidationException('Validation failed, wrong input data');
	}


	public function get(string $user_id): array|UserEntity {
		$validation = new CustomValidation($user_id);
		if($validation->validateUuid()) {
			if($user_bean = UserModel::getByUuid($user_id)) {
				return $user_bean;
			};
			return [];
		}
		throw new ValidationException('Validation failed, uuid not valid');
	}

	public function getAll(): array {
		return UserModel::getAll();
	}

	public function update(mixed $user): array|object {
		$validation = new CustomValidation($user);
		if($validation->validate_update()) {
			$user_uuid = $user->uuid;
			$user_entity = new UserEntity();
			if(!empty($user->firstname)) {
				$user_entity->set_firstname($user->firstname);
			}
			if(!empty($user->lastname)) {
				$user_entity->set_lastname($user->lastname);
			}
			if(!empty($user->phone)) {
				$user_entity->set_phone($user->phone);
			}
			$valid = UserModel::update($user_uuid, $user_entity);
			if(!$valid) {
				Http::setHeadersByCode(StatusCode::NOT_FOUND);
				return [];
			}
			return $user;
		}
		throw new ValidationException('Validation failed, wrong input data');
	}

	public function remove(string $user_uuid): bool {
		$validation = new CustomValidation($user_uuid);
		if($validation->validateUuid()) {
			return UserModel::remove($user_uuid);
		}

		throw new ValidationException('Validation failed, uuid not valid');
	}

}

