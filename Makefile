.PHONY: docker-build
docker-build:
	docker build -t codiumteam/tdd-training-php .

.PHONY: docker-push
docker-push:
	docker push codiumteam/tdd-training-php

.PHONY: docker-pull
docker-pull:
	docker pull codiumteam/tdd-training-php
