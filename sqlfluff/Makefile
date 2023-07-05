SQL_FLUFF_VERSION := "1.4.5"

.PHONY: lint
lint:
ifdef fix
	docker run --rm -u $$(id -u):$$(id -g) -v $(PWD):/data:z sqlfluff/sqlfluff:${SQL_FLUFF_VERSION} fix -f /data
else
	docker run --rm -u $$(id -u):$$(id -g) -v $(PWD):/data sqlfluff/sqlfluff:${SQL_FLUFF_VERSION} lint /data
endif
