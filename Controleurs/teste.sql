create view planningmoniteur AS
	SELECT p.datedebut, p.datefin, p.heuredebut, p.heurefin, v.numvehicule, c.nomclient, p.etatplanning, m.nommoniteur
	FROM planning p, vehicule v, candidat c, moniteur m
	WHERE p.nummoniteur = m.nummoniteur;

alter table lecon change dateheurelecon datelecon date;

alter table lecon add heurelecon time; 