// import deleteIcon from './img/delete.png';

export default function User({
    name,
    email
}) {

  return (
    <div className="user-list__user">
        <div className="user-list__user-info">
          <div className="user-list__name">{ name }</div>
          <div className="user-list__email">{ email }</div>
        </div>
        <div className="user-list__user-actions">
          <a href="#">
            <img src="/img/delete.png" alt="delete" title="delete" />
          </a>
        </div>
    </div>
  );
}
