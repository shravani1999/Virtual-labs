use virtuallabsdsce;

insert into questions_ds values ( 'que1', 'Which data structure is needed to convert Infix notation to Postfix notation', 'que1d');
insert into questions_ds values ( 'que2', 'A linear list of elements in which deletion takes place from one end (front) and insertion takes place only at the other end (rear) is known as a', 'que2a');
insert into questions_ds values ( 'que3', 'A queue is a', 'que3a');
insert into questions_ds values ( 'que4', 'If the elements “A”, “B”, “C” and “D” are placed in a queue and are deleted one at a time, in what order will they be removed??', 'que4a');
insert into questions_ds values ( 'que5', 'In linked list implementation of a queue, where does a new element get inserted?', 'que5b');
insert into questions_ds values ( 'que6', 'In the array implementation of circular queue, which of the following operation take worst case linear time', 'que6d');
insert into questions_ds values ( 'que7', 'In linked list implementation of queue, if only the front pointer is maintained, which of the following operation takes worst case linear time', 'que7d');
insert into questions_ds values ( 'que8', 'A circular queue is implemented using an array of size 10. The array index starts with 0, front is 6, and rear is 9. The insertion of next element takes place at the array index', 'que8a');

insert into answer_ds values ('que1a', 'Branch');
insert into answer_ds values ('que1b', 'Tree');
insert into answer_ds values ('que1c', 'Queue');
insert into answer_ds values ('que1d', 'Stack');

insert into answer_ds values ('que2a', 'Queue');
insert into answer_ds values ('que2b', 'Stack');
insert into answer_ds values ('que2c', 'Tree');
insert into answer_ds values ('que2d', 'Linked list');

insert into answer_ds values ('que3a', 'FIFO (First In First Out) list');
insert into answer_ds values ('que3b', 'LIFO (Last In First Out) list.');
insert into answer_ds values ('que3c', 'Ordered array');
insert into answer_ds values ('que3d', 'Linear tree');

insert into answer_ds values ('que4a', 'ABCD');
insert into answer_ds values ('que4b', 'DCBA');
insert into answer_ds values ('que4c', 'DCAB');
insert into answer_ds values ('que4d', 'ABDC');

insert into answer_ds values ('que5a', 'At the head of the Linked List');
insert into answer_ds values ('que5b', 'At the tail of the Linked List');
insert into answer_ds values ('que5c', 'At the centre position of the Linked List');
insert into answer_ds values ('que5d', 'None');

insert into answer_ds values ('que6a', 'Insertion');
insert into answer_ds values ('que6b', 'Deletion');
insert into answer_ds values ('que6c', 'To empty a queue');
insert into answer_ds values ('que6d', 'None');

insert into answer_ds values ('que7a', 'Insertion');
insert into answer_ds values ('que7b', 'Deletion');
insert into answer_ds values ('que7c', 'To empty a queue');
insert into answer_ds values ('que7d', 'Both Insertion and Emptying the queue');

insert into answer_ds values ('que8a', '0');
insert into answer_ds values ('que8b', '7');
insert into answer_ds values ('que8c', '9');
insert into answer_ds values ('que8d', '10');